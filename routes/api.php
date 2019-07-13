<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['middleware' => 'api'], function ($api) {
    $api->post('login', ['as' => 'login', 'uses' => 'Pares\Http\Controllers\Api\AuthController@login']);
    $api->get('logout', 'Pares\Http\Controllers\Api\AuthController@logout');
    $api->post('refresh', 'Pares\Http\Controllers\Api\AuthController@refresh');
    $api->post('register', ['as' => 'register', 'uses' => 'Pares\Http\Controllers\Api\AuthController@register']);
    $api->get('me', 'Pares\Http\Controllers\Api\AuthController@me');
});

$api->version('v1', ['middleware' => 'api.auth'], function ($api) {
    $api->post('receive', 'Pares\Http\Controllers\Api\MessageController@receive');
});


