<?php

Auth::routes();

Route::get('/',             'HomeController@index')->name('home');
Route::get('/organisation', 'HomeController@organisation')->name('organisation');
Route::get('/inscription',  'HomeController@inscription')->name('inscription');
//Route::get('/', 'HomeController@home')->name('home');
Route::post('/landingInscription', 'HomeController@inscriptionLandingPage')->name('landingPagePost');
Route::get('/forum', 'HomeController@forum')->name('forum');
Route::get('/onePost', 'HomeController@onePost');
Route::get('/formForum', 'HomeController@formForum');
