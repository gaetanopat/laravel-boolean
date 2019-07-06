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

// route per la homepage
Route::get('/', 'HomeController@homepage')->name('home');
// route per la pagina privacy-policy
Route::get('privacy-policy', 'HomeController@privacyPolicy')->name('privacy');
// route per la pagina work-with-us
Route::get('work-with-us', 'HomeController@workwithUs')->name('lavoraconnoi');
