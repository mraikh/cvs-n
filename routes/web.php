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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::delete('/cvs/{id}','CvsController@destroy');
Route::put('/cvs/{id}','CvsController@update');
Route::get('/cvs/{id}/edit','CvsController@edit');
Route::get('/cvs','CvsController@index');
Route::post('/cvs','CvsController@store');
Route::get('/CV/create','CvsController@create');
 //was

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});

require __DIR__.'/auth.php';
