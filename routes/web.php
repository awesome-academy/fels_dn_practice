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
    return view('master');
});

//Authenticator
Route::group(['namespace' => 'Auth'],function(){
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register', 'RegisterController@create');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin'], function (){
    Route::get('admin', 'HomeController@index')->name('total');
});

/*Admin */
Route::get('admin/register', function (){
    return view('admin.register');
});
Route::get('admin/login', function (){
    return view('admin.login');
});

/*Admin Categories*/

Route::resource('categories','CategoryController');

/*Admin Lessions*/
Route::resource('lessions','LessionsController');

/*Words Lessions*/

Route::resource('words','WordController');

Route::get('/chart', 'ChartController@index');
