<?php
Route::name('admin.')
  ->prefix('admin')
  ->group(function () {
    Route::get('/users', 'UsersController@index')->name('home');
  });

