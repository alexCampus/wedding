<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/organisation', 'HomeController@organisation')->name('organisation');
Route::get('/inscription', 'HomeController@inscription')->name('inscription');
//Route::get('/', 'HomeController@home')->name('home');
//Route::post('/landingInscription', 'HomeController@inscriptionLandingPage')->name('landingPagePost');

Route::get('/listeLanding', 'HomeController@listeLanding')->name('listeLanding');
Route::get('/media', 'MediaController@form')->name('media');
Route::post('/media', 'MediaController@store');

//Forum
Route::get('/forum', 'ForumController@index')->name('forum');
Route::get('/onePost', 'ForumController@onePost');
Route::get('/formForum', 'ForumController@formForum')->name('formForum');
Route::post('/formForum', 'ForumController@storePost')->name('storePost');