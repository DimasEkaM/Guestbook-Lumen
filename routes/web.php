<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('guest','GuestController@index');
$router->get('guest/{id}','GuestController@show');
$router->post('guest','GuestController@store');
$router->put('guest/{id}','GuestController@update');
$router->delete('guest/{id}','GuestController@delete');
