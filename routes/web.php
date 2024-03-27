<?php

use Illuminate\Support\Facades\Route;

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

/* Socialite OAuthorization */
Route::get('/login/{provider}', [App\Actions\Socialite\Controller::class, 'redirectTo'])->where('provider', config('services.allowed_socialite_providers'))->name('socialite.redirect');
Route::get('/login/{provider}/callback', [App\Actions\Socialite\Controller::class, 'handleCallback'])->where('provider', config('services.allowed_socialite_providers'))->name('socialite.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/components', function () {
        //return redirect(route('home'))->with('light', 'Project Updated!');
        return view('components');
    })->name("components");

    Route::put('/user/set/lighting', [\App\Http\Controllers\UserController::class, 'setLightingMode']);

    Route::middleware(['password.confirm'])->group(function () {
        // High value actions
    });
});
