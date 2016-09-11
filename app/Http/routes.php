<?php

Route::get('/', 'WelcomeController@index');
Route::post('inscreva_se', 'WelcomeController@InscrevaSe');
Route::post('participe', 'WelcomeController@Participe');
