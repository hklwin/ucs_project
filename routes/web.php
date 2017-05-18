<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/places', function () {
    return view('places');
});

Route::get('/stores', function () {
    return view('stores');
});

Route::get('/restaurants', function () {
    return view('restaurants');
});

Route::get('/users', 'UserController@showUsers');

Route::get('/user/new', function () {
		return view('user_new');
});

Route::get('/user/{id}/edit', 'UserController@editUser');

Route::post('/user/create', 'UserController@createUser');
Route::put('/user/update', 'UserController@updateUser');
Route::delete('/user/{id}/delete', 'UserController@deleteUser');
Route::get('/user/{id}/delete', 'UserController@deleteUser');

// Route::get('/api/users', function() {
// 		return $users;
// });

// Route::get('/api/user/{id}', function(App\User $id) {

// });
