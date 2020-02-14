<?php
Route::name('admin.')->prefix('admin')->middleware(['auth', 'permission:dostęp do panelu'])->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

    Route::get('/template', function () {
        return view('admin.template');
    });

    Route::resource('users', 'Admin\UsersController');

    Route::get('membership-payments/dashboard/{period?}', 'Admin\MembershipPaymentsDashboardController@index');

    Route::resource('membership-payments', 'Admin\MembershipPaymentsController');
});

