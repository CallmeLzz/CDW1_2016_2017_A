<?php

Route::get('sample',  'Foostart\Sample\Controllers\SampleController@index');
Route::get('sampledata',  'Foostart\Sample\Controllers\SampleController@getData');

Route::get('sampleadmin', [
            "as"   => "user.admin.login",
            "uses" => 'Foostart\Sample\Controllers\AdminController@index'
    ]);
Route::get('dashboard', [
            "as"   => "user.admin.dashboard",
            "uses" => 'Foostart\Sample\Controllers\DashboardController@base'
    ]);

Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

    	Route::get('admin/sample', [
            'as' => 'admin_sample',
            'uses' => 'Foostart\Sample\Controllers\SampleController@index'
        ]);
    });
});