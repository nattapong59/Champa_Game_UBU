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
Route::get('/login', function () {
    return view('login');
});
Route::get('/EditData', function () {
    return view('EditData');
});
Route::get('/ShowTable', function () {
    return view('ShowTable');
});


Route::get('/ShowUser', function () {
  return view('ShowUser');
});

Route::get('/program', function () {
  return view('program');
});


Route::resource('/addfootball', 'FootballController');

Route::resource('/addbasketball', 'BasketballController');

Route::resource('/addesport', 'EsportController');

Route::resource('/addfutsal', 'FutsalController');

Route::resource('/addvolleyball', 'VolleyballController');


Route::resource('/addbadminton', 'BadmintonController');

