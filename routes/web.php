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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontEnd.index');
})->name('frontEnd.index');


Route::get('buying', function () {
    return view('frontEnd.buying');
})->name('frontEnd.buying');


Route::get('contacts', function () {
    return view('frontEnd.contacts');
})->name('frontEnd.contacts');


Route::get('finance', function () {
    return view('frontEnd.finance');
})->name('frontEnd.finance');


Route::get('renting', function () {
    return view('frontEnd.renting');
})->name('frontEnd.renting');


Route::get('selling', function () {
    return view('frontEnd.selling');
})->name('frontEnd.selling');
*/

//localhost/dashboard/
//localhost/dashboard/products

Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');


Route::get('train', 'TrainController@querybuilder');
Route::get('orm', 'TrainController@orm');
Route::get('relationships', 'TrainController@relationships');
Route::get('poly_relationships', 'TrainController@poly_relationships');
Route::get('encrypt', 'TrainController@encrypt');


Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function(){
    Route::get('/','DashboardController@index')->name('home');
    Route::resource('posts','PostController');
    Route::resource('users', 'UserController');

});

Route::get('/','frontEndController@showIndex')->name('frontEnd.index');
Route::get('/buying','frontEndController@showBuying')->name('frontEnd.buying');
Route::get('/contacts','frontEndController@showContacts')->name('frontEnd.contacts');
Route::get('/finance','frontEndController@showFinance')->name('frontEnd.finance');
Route::get('/renting','frontEndController@showRenting')->name('frontEnd.renting');
Route::get('/selling','frontEndController@showSelling')->name('frontEnd.selling');

//Route::resource('Users','Dashboard\UserController');
