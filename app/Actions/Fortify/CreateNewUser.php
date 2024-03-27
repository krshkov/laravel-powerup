<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array<string, string> $input
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'termsAccepted' => ['nullable', 'boolean'],
            'subscribe' => ['nullable', 'boolean'],
            'password' => $this->passwordRules(),
            'providers' => ['nullable', 'array'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phone' => [
                'nullable',
                'string',
                'max:20',
                Rule::unique(User::class),
            ],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'providers' => $input['providers'] ?? [],
            'email' => $input['email'],
            'phone' => $input['phone'] ?? "",
            'password' => Hash::make($input['password']),
            'subscriber' => $input['subscribe'] ?? false,
            'accepted_terms_and_conditions' => $input['termsAccepted'] ?? false,
        ]);
    }
}
