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

$api->version('v1', ['namespace' => 'App\Http\Controllers\Api'], function ($api) {

    $api->get('task', 'TaskController@index');
    $api->post('task', 'TaskController@store');
    $api->get('task/{id}', 'TaskController@show');
    $api->put('task/{id}', 'TaskController@update');
    $api->delete('task/{id}', 'TaskController@destroy');
    $api->get('employee', 'EmployeeController@index');
    $api->get('employee/{id}', 'EmployeeController@show');
    $api->get('employee/{id}/tasks', 'EmployeeController@taskList');

});