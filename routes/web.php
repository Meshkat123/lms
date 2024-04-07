<?php

use Illuminate\Support\Facades\Route;

$adminNamespace     = 'App\Http\Controllers\Admin';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::namespace($adminNamespace)->group(function () {
    Route::get('', 'DashboardController@index');
    Route::get('admin/home', 'DashboardController@index')->name('dashboard');
});
