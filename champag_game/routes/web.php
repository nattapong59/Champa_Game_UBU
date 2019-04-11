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