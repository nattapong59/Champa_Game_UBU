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

Route::get('/test', function(){
  return view('welcome');
});

Route::get('/user', function(){
  return view('user_manager');
});

Route::get('/fb', function(){
  return view('football');
});

Route::resource('add','UserController');
Route::get('/addinformation', function () {
    return view('addinformation');
});
Route::get('/Addsporttype', function () {
    return view('Addsporttype');
});

Route::get('/EditData', function () {
    return view('EditData');
});
Route::get('/ShowTable', function () {
    return view('ShowTable');
});


Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
