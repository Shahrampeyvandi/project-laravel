<?php

Route::resource('header','Headercontroller')->only('edit','update');

Route::get('/','indexcontroller@main' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
