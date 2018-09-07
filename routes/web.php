<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/landingInscription', 'HomeController@inscriptionLandingPage');
