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

Route::get('/about', 'aboutController@index');
Route::get('/computer', 'computerController@index');
Route::get('/english', 'englishController@index');
Route::get('/dance', 'danceController@index');
Route::get('/playgroup', 'playgroupController@index');
Route::get('/kindergarten', 'kindergartenController@index');
Route::get('/elementary', 'elementaryController@index');
Route::get('/daycare', 'daycareController@index');
Route::get('/contact', 'contactController@index');
