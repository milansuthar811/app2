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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::group(['middleware' => 'auth'], function(){
        Route::resource('users', UserController::class);
    });

    Route::get('/', 'HomeController@index')->name('home.dashboard_index');

    // Route::get('/welcome', function () {
    //     return view('layouts.app', []);
    // });
    Route::group(['middleware' => ['guest']], function() {
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
    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });


    // Google URL
    // Route::prefix('google')->name('google.')->group(function () {
    //     Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    //     Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
    // });    
    Route::prefix('google')->name('google.')->group(function () {
        Route::get('login', 'GoogleController@loginWithGoogle')->name('login');
        Route::any('callback', 'GoogleController@callbackFromGoogle')->name('callback');
    });    
   
});
