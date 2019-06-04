<?php

Auth::routes();

Route::get('/',             'HomeController@index')->name('home');
Route::get('/organisation', 'HomeController@organisation')->name('organisation');
Route::get('/hebergement', 'HomeController@hebergement')->name('hebergement');
Route::get('/inscription',  'HomeController@inscription')->name('inscription');
//Route::get('/', 'HomeController@home')->name('home');
Route::post('/landingInscription', 'HomeController@inscriptionLandingPage')->name('landingPagePost');
Route::get('/forum', 'HomeController@forum')->name('forum');
Route::get('/onePost', 'HomeController@onePost');
Route::get('/formForum', 'HomeController@formForum');
Route::get('/listeLanding', 'HomeController@listeLanding')->name('listeLanding');
Route::get('/listeInscrits', 'HomeController@listeInscrits')->name('listeInscrits');
