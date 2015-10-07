<?php
use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('{provider}/authorize', function($provider) {
    return SocialAuth::authorize($provider);
});

Route::get('{provider}/login', function($provider) {
    SocialAuth::login($provider);
    return "done";
});
