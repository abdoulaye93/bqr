<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profile_id' => ['required', 'numeric', 'exists:profiles,id'],
            'service_id' => ['required', 'numeric', 'exists:profiles,id'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'first_name' => $input['first_name'],
            'email' => $input['email'],
            'profile_id' => $input['profile_id'],
            'service_id' => $input['service_id'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
