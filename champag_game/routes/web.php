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


Route::resource('add','UserController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');



Route::resource('/addfootball', 'FootballController')->middleware('is_admin');;
Route::resource('/addbasketball', 'BasketballController')->middleware('is_admin');;
Route::resource('/addesport', 'EsportController')->middleware('is_admin');;
Route::resource('/addfutsal', 'FutsalController')->middleware('is_admin');;
Route::resource('/addvolleyball', 'VolleyballController')->middleware('is_admin');;
Route::resource('/addbadminton', 'BadmintonController')->middleware('is_admin');;
Route::resource('/program', 'ProgramController')->middleware('is_admin');
Route::resource('/ShowTable', 'ShowTableController');
Route::resource('/players','PlayerController');
