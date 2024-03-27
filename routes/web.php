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
        $modal_content = '
            <p>This content is sent by the backend, yes, you can send content from the backend to modals!</p>
            <small>Check the routes/web.php -> components route, so you can understand the way to send it.</small>
            <h4>Basic Form</h4>
            <form class="mt-4" method="post" action="/test" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="' . csrf_token() . '" autocomplete="off">
                <input type="text" placeholder="Sample Input">
                <br>
                <button class="btn-main hoverable mt-3" type="submit">submit</button>
            </form>
        ';

        return view('components')->with(compact('modal_content'));
    })->name("components");

    Route::put('/user/set/lighting', [\App\Http\Controllers\UserController::class, 'setLightingMode']);

    Route::middleware(['password.confirm'])->group(function () {
        // High value actions
    });
});
