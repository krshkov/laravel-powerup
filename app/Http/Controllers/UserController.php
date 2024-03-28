<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    use PasswordValidationRules;

    /**
     * @param Request $request
     * @return void
     */
    public function setLightingMode(Request $request)
    {
        $usr = auth()->user();
        $usr->dark_mode = (bool)$request->darkMode;
        $usr->save();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit()
    {
        return view('auth.user_form')->with('user', auth()->user());
    }

    /**
     * @param Request $request
     * @return bool|\Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $authUser = \auth()->user();

        // Check password verification
        if (!Hash::check($request->check_password, $authUser->getAuthPassword())) {
            session()->flash('error', 'Incorrect Password! - Please try again');
            return redirect(route('user.edit'))->with('user', $authUser);
        }

        // Check if there is a new password
        if ($request->password || $request->password_confirmation) {
            Validator::make($request->toArray(), [
                'password' => $this->passwordRules(),
            ])->validate();

            $authUser->password = Hash::make($request['password']);
            // TODO: send email to inform the user
        }

        // Check if there is a new email
        if ($request->email != $authUser->email) {
            Validator::make($request->toArray(), [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ]
            ])->validate();

            $authUser->email = $request['email'];
            $authUser->email_verified_at = null;
            $authUser->sendEmailVerificationNotification();
            session()->flash('info', 'We have sent you email verification. Check your inbox.');
        }

        Validator::make($request->toArray(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => [
                'nullable',
                'string',
                'max:20',
                ($request->phone != $authUser->phone) ? Rule::unique(User::class) : '',
            ],
            'termsAccepted' => ['required', 'boolean'],
            'subscribe' => ['nullable', 'boolean'],
            'providers' => ['nullable', 'array'],
        ])->validate();


        $authUser->name = $request['name'];
        $authUser->phone = $request['phone'] ?? "";
        $authUser->subscriber = $request['subscribe'] ?? false;
        $authUser->accepted_terms_and_conditions = $request['termsAccepted'] ?? false;

        // $authUser->providers = $request['providers'] ?? [];

        if (!$authUser->save()) {
            session()->flash('error', 'There was an error while trying to update the user. Please try again later.');
        } else {
            session()->flash('success', 'The user was successfully updated!');

        }

        return redirect(route('user.edit'))->with('user', $authUser);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function passwordRequestRedirect(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Auth::logout();
        return redirect(route('password.request'));
    }
}
