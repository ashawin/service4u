<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth']], function () {
   Route::get('', 'admin\dashboardController@index')->name('admin-dashboard');
   Route::get('profile', 'admin\profileController@index')->name('admin-profile');
   Route::get('customers', 'admin\customerController@index')->name('admin-customer');
   Route::get('providers', 'admin\providerController@index')->name('admin-provider');
   Route::get('services', 'admin\serviceController@index')->name('admin-service');
    Route::get('setting', 'admin\settingController@index')->name('admin-setting');
    Route::get('manage/area', 'admin\areaController@index')->name('admin-area');
    Route::post('save/country', 'admin\areaController@addcategory')->name('admin-country-save');
    
});



