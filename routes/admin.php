<?php
Route::name('admin.')
    ->prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
    Route::resource('users', 'Admin\UsersController');

    Route::get('membership-payments/dashboard/{period?}', 'Admin\MembershipPaymentsDashboardController@index');

    Route::resource('membership-payments', 'Admin\MembershipPaymentsController');
});

