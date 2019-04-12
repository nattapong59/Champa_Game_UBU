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



Route::get('/ShowUser', function () {
  return view('ShowUser');
});

Route::get('/program', function () {
  return view('program');
});


<<<<<<< HEAD
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::resource('/addfootball', 'FootballController');

Route::resource('/addbasketball', 'BasketballController');

Route::resource('/addesport', 'EsportController');

Route::resource('/addfutsal', 'FutsalController');

Route::resource('/addvolleyball', 'VolleyballController');


Route::resource('/addbadminton', 'BadmintonController');

<<<<<<< HEAD
Route::resource('/program', 'ProgramController');
=======
Route::resource('/ShowTable', 'ShowTableController');
>>>>>>> c2e83f313556c7708f254e21a4ba25ebf5fba781

>>>>>>> cb0b5a6d1f51976319cbc8c7d14551d5b949076f
