<?php
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wunderman', 'WundermanController@index')->name('wunderman')->middleware('auth');
Route::post('/order', 'WundermanController@order')->name('make-order')->middleware('auth');
Route::get('/administrador', 'WundermanController@admin')->name('dashboard-admin');