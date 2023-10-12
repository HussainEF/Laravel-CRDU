<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\view;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

/* Route::get('/register', function(){
    return view('register');
});

Route::get('/login', function(){
    return View::make('login');
}); */

Route::get('/pages', function (){
    return View::make('pages.contact');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('login','App\Http\Controllers\AuthController@index');
    Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin');
    Route::get('register', 'App\Http\Controllers\AuthController@register');
    Route::post('post-register', 'App\Http\Controllers\AuthController@postRegister');
    Route::get('home', 'App\Http\Controllers\AuthController@home');
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');
});

Route::post('poll-creation', 'App\Http\Controllers\QuestionController@pollCreation');
Route::get('poll-data', 'App\Http\Controllers\AjaxController@pollData');
Route::post('vote-submittion', 'App\Http\Controllers\AjaxController@voteSubmit');
Route::get('polling/{id}', 'App\Http\Controllers\PollingController@pollForm')->name('polling');