<?php

namespace App\Actions\Socialite;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var CreateNewUser
     */
    private $createNewUserController;

    /**
     * @param CreateNewUser $createNewUserController
     */
    public function __construct(CreateNewUser $createNewUserController)
    {
        $this->createNewUserController = $createNewUserController;
    }

    /**
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectTo($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function handleCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $this->regOrLog($user, $provider);

        return redirect()->route('home');
    }

    /**
     * @param $userData
     * @param $provider
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function regOrLog($userData, $provider): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $provider_id = intval($userData->getId());
        $user = User::where('email', $userData->email)->first();

        if (!$user) {
            $generatedPwd = $this->generateSecurePassword();
            $data = [
                'providers' => [$provider => $provider_id],
                'name' => $userData->getName(),
                'email' => $userData->getEmail(),
                'avatar' => $userData->getAvatar(),
                'password' => $generatedPwd,
                'password_confirmation' => $generatedPwd,
                'termsAccepted' => true,
                'subscribe' => true,
                'email_verified_at' => Carbon::now(),
            ];

            $user = $this->createNewUserController->create($data);

            if ($user->id) {
                $user->markEmailAsVerified();
                session()->flash('success', 'Congratulates you have successfully registered. By default you have automatically accepted our terms and conditions.');
            }
        } else {
            if (empty($user->providers) || !isset($user->providers[$provider])) {
                $userProviders = $user->providers;
                $userProviders[$provider] = $provider_id;
                $user->providers = $userProviders;

                if (!$user->save()) {
                    return redirect(route('register'))->with('error', 'There was an error while trying to attach ' . ucfirst($provider) . ' to your account. Please try again later or contact our team.');
                }

                session()->flash('info', 'You have attached ' . ucfirst($provider) . ' to your account!');
            } else {
                if ($user->providers[$provider] != $provider_id) {
                    return redirect(route('register'))->with('error', 'This account with email ' . $userData->getEmail() . ' is registered by other ' . ucfirst($provider) . ' account. If this is some mistake, please contact us to verify that the account is yours.');
                }
            }
        }

        Auth::login($user);
        return redirect(route('home'));
    }

    /**
     * @param int $length
     * @return string
     */
    private function generateSecurePassword(int $length = 16): string
    {
        // Define character sets for password generation
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*()-_=+';

        // Create a base set of characters
        $characters = $uppercase . $lowercase . $numbers . $symbols;

        // Shuffle the characters to ensure randomness
        $characters = str_shuffle($characters);

        // Generate a random password of desired length
        $password = '';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[mt_rand(0, $charactersLength - 1)];
        }

        return $password;
    }
}
