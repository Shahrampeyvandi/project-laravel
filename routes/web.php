<?php


Route::get('/','indexcontroller@main' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
