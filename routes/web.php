<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomepageController@index')->name('homepage');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('moje-konto', 'AccountController@index')->name('account');
});
