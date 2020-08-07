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


  Route::get('', 'user\HomeController@index')->name('user-dashboard');
  Route::get('category/subcategory/{slug}', 'user\HomeController@productDetails')->name('user-product-details');
  Route::post('services', 'user\HomeController@search')->name('user-search');
  Route::get('book/{slug}', 'user\bookController@index')->name('user-book-service');
  Route::post('book/save', 'user\bookController@save')->name('user-book-service-save');
 

Auth::routes();
Route::group([ 'prefix' => 'vendor' ,'middleware' => ['App\Http\Middleware\VendorMiddleware']], function () {
  Route::get('dashboard', 'vendor\dashboardController@index')->name('vendor-dashboard');

  //Wallet

  Route::get('wallet/request', 'vendor\walletController@request')->name('vendor-wallet-request');
  Route::get('wallet/request/save', 'vendor\walletController@saveRequest')->name('vendor-wallet-request-save');

  //Services
  Route::get('/services', 'vendor\serviceController@index')->name('vendor-service');
   Route::post('/service/request', 'vendor\serviceController@requestService')->name('vendor-service-request');
   Route::get('/services/orders', 'vendor\serviceController@orderService')->name('vendor-service-orders');
   Route::post('/services/orders/confirm', 'vendor\serviceController@confirmOrder')->name('vendor-service-orders-confirm');

});

Route::group([ 'prefix' => 'admin' ,'middleware' => ['App\Http\Middleware\AdminMiddleware']], function () {
   Route::get('dashboard', 'admin\dashboardController@index')->name('admin-dashboard');
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
      Route::get('service/requests', 'admin\serviceController@serviceRequest')->name('admin-service-request');
        Route::post('service/requests/confirm', 'admin\serviceController@confirmRequest')->name('admin-service-request-confirm');
      Route::get('service/add', 'admin\serviceController@add')->name('admin-service-add');
      Route::post('service/save', 'admin\serviceController@save')->name('admin-service-save');


      //Wallet
        Route::get('transaction/details', 'admin\walletController@index')->name('admin-transaction');
        Route::get('wallet/balance/request', 'admin\walletController@walletRequest')->name('admin-wallet-request');
        Route::post('add/amount/{id}/{balance}', 'admin\walletController@transferBalance')->name('admin-transfer-balance');
        Route::post('add/admin/balance', 'admin\walletController@addBalance')->name('admin-add-balance');

      //Ajax
      Route::post('ajax/states', 'admin\ajaxController@getStates')->name('admin-ajax-state');
       Route::post('ajax/districts', 'admin\ajaxController@getDistricts')->name('admin-ajax-district');
      Route::post('ajax/subcategory', 'admin\ajaxController@getSubCategory')->name('admin-ajax-subcat');
      Route::post('ajax/products', 'admin\ajaxController@getProduct')->name('admin-ajax-product');
      Route::post('ajax/areas', 'admin\ajaxController@getArea')->name('admin-ajax-area');

      

      
      




    
});



