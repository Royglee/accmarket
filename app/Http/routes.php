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

Route::get('/', 'AccountsController@index');

Route::get('home', 'HomeController@index');
get('accounts', 'AccountsController@index');
get('accounts/create','AccountsController@create');
get('accounts/{account}', 'AccountsController@show');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//--SQL query log--//
if (Config::get('database.log', false))
{
    Event::listen('illuminate.query', function($query, $bindings, $time, $name)
    {
        $data = compact('bindings', 'time', 'name');

        // Format binding data for sql insertion
        foreach ($bindings as $i => $binding)
        {
            if ($binding instanceof \DateTime)
            {
                $bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
            }
            else if (is_string($binding))
            {
                $bindings[$i] = "'$binding'";
            }
        }

        // Insert bindings into query
        $query = str_replace(array('%', '?'), array('%%', '%s'), $query);
        $query = vsprintf($query, $bindings);

        Log::info($query, $data);
    });
}