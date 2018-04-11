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
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'UserLoginController@getUserLogin');
    Route::post('login', ['as'=>'user.auth','uses'=>'UserLoginController@userAuth']);
    Route::get('admin/login', 'AdminLoginController@getAdminLogin');
    Route::post('admin/login', ['as'=>'admin.auth','uses'=>'AdminLoginController@adminAuth']);
    Route::group(['middleware' => ['admin']], function () {
        Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tarun', 'DemoController@demo');
Route::post('/tarun', 'DemoController@demoSubmit')->name('submit');
