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

/*Admin */
Route::get('admin', function () {
    return view('admin.home');
});
Route::get('admin/categories', function (){
    return view('admin.categories.show');
});
Route::get('admin/register', function (){
    return view('admin.register');
});
Route::get('admin/login', function (){
    return view('admin.login');
});

/*Admin Categories*/
Route::get('/categories/add', function (){
    return view('admin.categories.create');
});
Route::get('/categories/all', function (){
    return view('admin.categories.show');
});
Route::get('/categories/edit', function (){
    return view('admin.categories.edit');
});
Route::delete('categories/{id}','CategoryController@destroy');

/*Admin Lessions*/
Route::get('/lessions/add', function (){
    return view('admin.lessions.create');
});
Route::get('/lessions/all', function (){
    return view('admin.lessions.show');
});
Route::get('/lessions/edit', function (){
    return view('admin.lessions.edit');
});

/*Words Lessions*/
Route::get('/words/add', function (){
    return view('admin.words.create');
});
Route::get('/words/all', function (){
    return view('admin.words.show');
});
Route::get('/words/edit', function (){
    return view('admin.words.edit');
});

