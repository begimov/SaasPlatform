<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'namespace' => 'Account', 'as' => 'account.'], function () {
    Route::get('/', 'AccountController@index')->name('index');
});
