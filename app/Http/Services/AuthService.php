<?php

namespace App\Http\Services;

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthService extends Service
{
    public function processLogin (array $data): array
    {
        try {
            $user = User::where('email', $data['email'])->first();
            if (!$user) {
                return ['success' => false,'message' => "Email not found"];
            }
            if (!Hash::check($data['password'], $user->password)) {
                return ['success' => false,'message' => "Wrong Email Or Password"];
            }
            Auth::login($user);
            return ['success' => true,'message' => "Login Successful!"];
        }
        catch (\Exception $exception) {
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }

    /**
     * @param array $data
     * @return array
     */
    public function processRegistration (array $data): array
    {
        try {

            $formattedData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ];
            $user=User::create($formattedData);
            return ['success' => true,'message' => "Registration Successful! "];
        }
        catch (\Exception $exception) {
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }
    public function logout(){
        try {

           Auth::logout();
            return ['success' => true,'message' => "Logout successfully"];
        }
        catch (\Exception $exception) {
            return ['success' => false,'message' => $exception->getMessage()];
        }
    }
}
