<?php
Route::name('admin.')->prefix('admin')->middleware(['auth', 'permission:dostęp do panelu'])->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

    Route::resource('users', 'Admin\UsersController');

    Route::resource('departments', 'Admin\DepartmentsController');

    Route::get('membership-payments/dashboard/{period?}', 'Admin\MembershipPaymentsDashboardController@index')->name('membership-payments-dashboard');

    Route::resource('membership-payments', 'Admin\MembershipPaymentsController');

    Route::resource('membership-fees', 'Admin\MembershipFeesController');

    Route::resource('articles', 'Admin\ArticlesController');

    Route::resource('calendar', 'Admin\CalendarController');


});

