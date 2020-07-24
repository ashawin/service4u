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
    Route::post('save/country', 'admin\areaController@addcountry')->name('admin-country-save');
    Route::post('save/state', 'admin\areaController@addstate')->name('admin-state-save');
    Route::post('get/all/area', 'admin\areaController@getall')->name('admin-all-area');
     Route::post('save/district', 'admin\areaController@adddistrict')->name('admin-save-district');
     Route::post('save/area', 'admin\areaController@addarea')->name('admin-save-area');

     //category
     Route::get('manage/category', 'admin\categoryController@index')->name('admin-category');
     Route::post('save/category', 'admin\categoryController@addcategory')->name('admin-category-save');

     //subcategory
     Route::post('save/subcategory', 'admin\categoryController@addsubcategory')->name('admin-subcategory-save');

     //product
     Route::get('products', 'admin\productController@index')->name('admin-product');
     Route::post('product/save', 'admin\productController@save')->name('admin-product-save');

     //services
      Route::get('services', 'admin\serviceController@index')->name('admin-service');
      Route::get('service/add', 'admin\serviceController@add')->name('admin-service-add');
      Route::post('service/save', 'admin\serviceController@save')->name('admin-service-save');

      //Ajax
      Route::post('ajax/states', 'admin\ajaxController@getStates')->name('admin-ajax-state');
       Route::post('ajax/districts', 'admin\ajaxController@getDistricts')->name('admin-ajax-district');
      Route::post('ajax/subcategory', 'admin\ajaxController@getSubCategory')->name('admin-ajax-subcat');
      Route::post('ajax/products', 'admin\ajaxController@getProduct')->name('admin-ajax-product');
      Route::post('ajax/areas', 'admin\ajaxController@getArea')->name('admin-ajax-area');
      
      




    
});



