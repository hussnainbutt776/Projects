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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/',function(){
//    return view('main_page');
//});
//
//Route::get('/signin',function(){
//    return view('signin');
//});


Route::get('/','all_pages@get_main_page');
Route::get('/signin','all_pages@get_signin');
Route::get('/donate_form','all_pages@get_donate_form');
