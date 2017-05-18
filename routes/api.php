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

// Route::middleware('auth:api')->get('/user', 'UserController@');

// Ref: https://laravel.com/docs/5.1/controllers#restful-partial-resource-routes
Route::middleware('api')->resource('user', 'UserController', ['only' => ['index', 'store', 'show', 'update', 'destroy']]);
