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

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/land/details/{id}', 'HomeController@landDetails')->name('home.details');
// Route::get('/get/detail', 'HomeController@getDetail')->name('home.get.details');
// Route::get('/land/delete', 'HomeController@landDelete')->name('land.delete');
// Route::get('/land/details/{id}', 'HomeController@landDetails');

// Route::get('/form', 'HomeController@formIndex');
// Route::post('/dataForm/store','TestController@dataFormStore')->name('form.post');

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/profile','HomeController@getProfile');
Route::post('/change/password','HomeController@changePassword');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// frontend
Route::get('/index','IndexController@index')->name('front-end-index');
// frontend

// backend
Route::get('/settings','SettingController@settings')->name('front-end-settings');

// backend


