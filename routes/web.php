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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
//admin
Route::group(['middleware' => ['auth', 'AccessAdmin:admin']], function () {

    Route::get('/dashboard', 'admin\dashboardController@index');
    Route::get('/blogadmin', 'admin\blogController@index');
    Route::resource('input-blog', 'admin\inputblogController');
    Route::resource('admins-view', 'admin\adminController');
    Route::resource('user-view', 'admin\visitorController');
});
//admin

Route::resource('index', 'indexController');
Route::get('/about', 'aboutController@index');
Route::get('/computer', 'computerController@index');
Route::get('/english', 'englishController@index');
Route::get('/dance', 'danceController@index');
Route::get('/playgroup', 'playgroupController@index');
Route::get('/kindergarten', 'kindergartenController@index');
Route::get('/elementary', 'elementaryController@index');
Route::get('/daycare', 'daycareController@index');
Route::get('/ekstra', 'ekstraController@index');

Route::post('/login/masuk', 'admin\loginController@postlogin');
//register user admin
Auth::routes();
//register user admin

//verifikasi email user
Auth::routes(['verify' => true]);
Route::get('/notif', 'notifController@index');


//contact
Route::resource('contact', 'contactController');
//contact
