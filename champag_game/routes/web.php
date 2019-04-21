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

Route::resource('/','TabelController');

Route::get('/add-player', function(){
  return view('add_player');
})->middleware('auth');

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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');



Route::resource('/addfootball', 'FootballController');
Route::resource('/addbasketball', 'BasketballController');
Route::resource('/addesport', 'EsportController');
Route::resource('/addfutsal', 'FutsalController');
Route::resource('/addvolleyball', 'VolleyballController');
Route::resource('/addbadminton', 'BadmintonController');
Route::resource('/program', 'ProgramController');
Route::resource('/ShowTable', 'ShowTableController');
Route::resource('/players','PlayerController');
Route::resource('/Tabel','TabelController');
