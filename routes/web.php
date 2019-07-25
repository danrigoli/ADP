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
Route::get('/peisa', 'PeisaController@index')->name('peisa')->middleware('auth');
Route::post('/order', 'PeisaController@order')->name('make-order')->middleware('auth');
Route::get('/administrador', 'PeisaController@admin')->name('dashboard-admin')->middleware('admin');
Route::get('/ticket-generator', 'PeisaController@generateTicket')->name('generate-ticket')->middleware('peisa.admin');
Route::post('/ticket-create', 'PeisaController@createTicket')->name('create-ticket')->middleware('peisa.admin');

Route::get('logout', 'Auth\LoginController@logout');
