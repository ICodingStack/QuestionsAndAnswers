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
//new question
Route::get('/Ask-new-question',function (){
    return view('web.new-question');
})->name('new-Question');
//display question
Route::get('/display-question',function (){
    return view('web.display-question');
})->name('display-question');
