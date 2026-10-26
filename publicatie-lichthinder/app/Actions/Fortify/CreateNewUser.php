<?php

namespace App\Actions\Fortify;

use App\Concerns\PasswordValidationRules;
use App\Concerns\ProfileValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules, ProfileValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, mixed>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'tussenvoegsel' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => $this->emailRules(),
            'password' => $this->passwordRules(),
        ])->validate();

        $name = implode(' ', array_filter([
            $input['first_name'],
            $input['tussenvoegsel'] ?? null,
            $input['last_name'],
        ], fn (?string $part): bool => $part !== null && $part !== ''));

        return User::create([
            'first_name' => $input['first_name'],
            'tussenvoegsel' => $input['tussenvoegsel'] ?? null,
            'last_name' => $input['last_name'],
            'name' => $name,
            'email' => $input['email'],
            'password' => $input['password'],
        ]);
    }
}
