<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('landingPage');
Route::get('/home', 'HomeController@home')->name('home')->middleware('auth');
Route::post('/landingInscription', 'HomeController@inscriptionLandingPage')->name('landingPagePost');
