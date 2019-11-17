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

                          //recipient/receiver_pages route
Route::get('/','receiver_pages@get_main_page');
Route::get('/receiver_signin','receiver_pages@get_receiver_signin');
Route::get('/receiver_regist_form','receiver_pages@get_receiver_registration_form');
Route::get('/receiver_search','receiver_pages@get_search');


                        //Doners_pages route
Route::get('/donar_main_page','donar_pages@get_donar_main_page');
Route::get('/update_donar_record','donar_pages@get_update_donar_record');
Route::get('/donar_registration','donar_pages@get_donar_registration');
Route::get('/donar_signin','donar_pages@get_donar_signin');
Route::get('/receiver_all_records','donar_pages@get_receiver_all_record');



