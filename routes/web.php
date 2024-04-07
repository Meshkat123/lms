<?php

use Illuminate\Support\Facades\Route;

$adminNamespace     = 'App\Http\Controllers\Admin';


Route::namespace($adminNamespace)->group(function () {
    Route::get('', 'DashboardController@index');
    Route::get('admin/home', 'DashboardController@index')->name('dashboard');
});
