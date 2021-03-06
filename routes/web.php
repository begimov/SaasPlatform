<?php

Route::get('/token', function () {
    $token = auth()->user()->generateConfirmationToken();
    dd($token);
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/**
 * Account
 */
Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'namespace' => 'Account', 'as' => 'account.'], function () {
    Route::get('/', 'AccountController@index')->name('index');

    /**
     * Profile
     */
    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::post('profile', 'ProfileController@store')->name('profile.store');

    /**
     * Password
     */
    Route::get('password', 'PasswordController@index')->name('password.index');
    Route::post('password', 'PasswordController@store')->name('password.store');
});
