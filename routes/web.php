<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('login', 'login')->name('login');
Route::get('logout', function () {
    auth()->logout();

    return redirect('login');
})->name('logout');

Route::get('auth/{provider}/redirect', function ($provider) {
    return Socialite::driver($provider)->redirect();
});
Route::get('auth/{provider}/callback', RegisterController::class);

Route::middleware('auth')
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
