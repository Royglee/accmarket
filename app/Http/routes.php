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

use App\Account;
use App\User;

Route::get('/', 'AccountsController@index');

Route::get('home', 'HomeController@index');
get('accounts', 'AccountsController@index');

get('accounts/{account}', 'AccountsController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
