<?php
Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('users', 'Admin\UsersController');

    Route::get('membership-payments/dashboard/{period?}', 'Admin\MembershipPaymentsDashboardController@index');

    Route::resource('membership-payments', 'Admin\MembershipPaymentsController');
});

