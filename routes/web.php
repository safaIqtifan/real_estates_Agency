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

Route::prefix('dashboard')->group(function(){
    Route::get('/','Dashboard\DashboardController@index');
    Route::resource('posts','Dashboard\PostController');


});

Route::get('/','frontEndController@showIndex')->name('frontEnd.index');
Route::get('/buying','frontEndController@showBuying')->name('frontEnd.buying');
Route::get('/contacts','frontEndController@showContacts')->name('frontEnd.contacts');
Route::get('/finance','frontEndController@showFinance')->name('frontEnd.finance');
Route::get('/renting','frontEndController@showRenting')->name('frontEnd.renting');
Route::get('/selling','frontEndController@showSelling')->name('frontEnd.selling');

//Route::resource('Users','Dashboard\UserController');
