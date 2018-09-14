<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('landingPage');
Route::get('/home', 'HomeController@home')->name('home')->middleware('auth');
Route::post('/landingInscription', 'HomeController@inscriptionLandingPage')->name('landingPagePost');
Route::get('/forum', 'HomeController@forum');
Route::get('/onePost', 'HomeController@onePost');
Route::get('/formForum', 'HomeController@formForum');
