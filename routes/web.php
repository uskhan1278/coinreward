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
Route::get('/','Coinreward@index')->name('index');
Route::get('/about','Coinreward@about')->name('about');
Route::get('/howitworks','Coinreward@howitworks')->name('howitworks');
Route::get('/affiliates','Coinreward@affiliates')->name('affiliates');
Route::get('/gethelp','Coinreward@gethelp')->name('gethelp');
Route::get('/faq','Coinreward@faq')->name('faq');
Route::get('/news','Coinreward@news')->name('news');
Route::get('/blog','Coinreward@blog')->name('blog');
Route::get('/login','Coinreward@login')->name('login');
Route::get('/register','Coinreward@register')->name('register');
Route::post('/register','Coinreward@registration')->name('registration');
Route::post('/logincheck','Coinreward@logincheck')->name('logincheck');
Route::post('/edit','Coinreward@edit')->name('edit');
Route::get('/profile','Coinreward@profile')->name('profile')->middleware('CoinrewardMiddleware');


//Admin Panel
Route::get('/_admin','AdminController@dashboard')->name('dashboard')->middleware('AdminMiddleware');
Route::get('/admin_login','AdminController@admin_login')->name('admin_login');
Route::get('/admin_logout','AdminController@admin_logout')->name('admin_logout')->middleware('AdminMiddleware');
Route::post('/admin_check','AdminController@admin_check')->name('admin_check');

Route::get('/edit_about','AdminController@edit_about')->name('edit_about')->middleware('AdminMiddleware');
Route::post('/edit_about','AdminController@edit_about_validate')->name('edit_about')->middleware('AdminMiddleware');