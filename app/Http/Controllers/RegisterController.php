<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class RegisterController extends Controller
{
    public function __invoke($provider)
    {
        $userObject = Socialite::driver($provider)->stateless()->user();

        $user = User::query()->firstOrCreate(
            ['email' => $userObject->email],
            [
                'social_id' => $userObject->id,
                'name' => $userObject->name,
                'email_verified_at' => now(),
                'password' => Hash::make('12345678')
            ]
        );

        auth()->login($user);

        return redirect('dashboard');
    }
}
