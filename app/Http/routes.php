<?php

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

use App\User;
use Laracasts\TestDummy\Factory;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

get('generate', function(){
    Factory::$factoriesPath = base_path() . '/tests/factories';
    Factory::times(10)->create('App\User');
});

get('users', function(){
    return User::all();
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
