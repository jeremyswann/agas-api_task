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

    // Task CRUD
    $api->get('task', 'TaskController@index');
    $api->post('task', 'TaskController@store');
    $api->get('task/{id}', 'TaskController@show');
    $api->put('task/{id}', 'TaskController@update');
    $api->delete('task/{id}', 'TaskController@destroy');

    // Client CRUD
    $api->get('client', 'ClientController@index');
    $api->post('client', 'ClientController@store');
    $api->get('client/{id}', 'ClientController@show');
    $api->put('client/{id}', 'ClientController@update');
    $api->delete('client/{id}', 'ClientController@destroy');

    // Message CRUD
    $api->get('message', 'MessageController@index');
    $api->post('message', 'MessageController@store');
    $api->get('message/{id}', 'MessageController@show');
    $api->put('message/{id}', 'MessageController@update');
    $api->delete('message/{id}', 'MessageController@destroy');

    // Message CRUD
    $api->get('meeting', 'MeetingController@index');
    $api->post('meeting', 'MeetingController@store');
    $api->get('meeting/{id}', 'MeetingController@show');
    $api->put('meeting/{id}', 'MeetingController@update');
    $api->delete('meeting/{id}', 'MeetingController@destroy');

    // Employee CRUD
    $api->get('employee', 'EmployeeController@index');
    $api->post('employee', 'EmployeeController@store');
    $api->get('employee/{id}', 'EmployeeController@show');
    $api->put('employee/{id}', 'EmployeeController@update');
    $api->delete('employee/{id}', 'EmployeeController@destroy');

    // Employee Assigned Lists: Tasks, Clients, Messages
    $api->get('employee/{id}/tasks', 'EmployeeController@taskList');
    $api->get('employee/{id}/clients', 'EmployeeController@clientList');
    $api->get('employee/{id}/messages', 'EmployeeController@messageList');
    $api->get('employee/{id}/meetings', 'EmployeeController@meetingList');

});