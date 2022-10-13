<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'HomeController@index')->name('home.dashboard_index');
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::resource('users', UserController::class);

        Route::get('/actions', 'User\UserActionsController@listactions')->name('user.listactions');
        Route::post('/actions', 'User\UserActionsController@storeactions')->name('user.storeactions');
    });

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        Route::prefix('google')->name('google.')->group(function () {
            Route::get('login', 'GoogleController@loginWithGoogle')->name('login');
            Route::any('callback', 'GoogleController@callbackFromGoogle')->name('callback');
        });         
    });
});
