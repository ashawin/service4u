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
   Route::get('services/{cat}', 'user\HomeController@searchCat')->name('user-search-cat');
  Route::get('book/{slug}', 'user\bookController@index')->name('user-book-service');
  Route::post('book/save', 'user\bookController@save')->name('user-book-service-save');

  //
   Route::post('partner/enquiry/save', 'user\HomeController@partnerEnquiry')->name('partner-enquiry');
 

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
    Route::get('country/delete/{id}', 'admin\areaController@deleteCountry')->name('admin-country-delete');
    Route::post('save/state', 'admin\areaController@addstate')->name('admin-state-save');
     Route::get('state/delete/{id}', 'admin\areaController@deleteState')->name('admin-state-delete');
    Route::post('get/all/area', 'admin\areaController@getall')->name('admin-all-area');
    Route::post('save/district', 'admin\areaController@adddistrict')->name('admin-save-district');
    Route::get('district/delete/{id}', 'admin\areaController@deleteDistrict')->name('admin-district-delete');
   
     Route::post('save/area', 'admin\areaController@addarea')->name('admin-save-area');
     Route::get('area/delete/{id}', 'admin\areaController@deleteArea')->name('admin-area-delete');

     //category
     Route::get('manage/category', 'admin\categoryController@index')->name('admin-category');
     Route::post('save/category', 'admin\categoryController@addcategory')->name('admin-category-save');
     Route::get('category/delete/{id}', 'admin\categoryController@deleteCategory');



     //subcategory
     Route::get('subcategory/delete/{id}', 'admin\categoryController@deletesubCategory');
     Route::post('save/subcategory', 'admin\categoryController@addsubcategory')->name('admin-subcategory-save');

     //product
     Route::get('products', 'admin\productController@index')->name('admin-product');
     Route::post('product/save', 'admin\productController@save')->name('admin-product-save');
     Route::get('product/delete/{id}', 'admin\productController@delete')->name('admin-product-delete');
      Route::get('product/edit/{id}', 'admin\productController@edit')->name('admin-product-edit');
      Route::post('product/edit/save', 'admin\productController@editsave')->name('admin-product-edit-save');

     //services
      Route::get('services', 'admin\serviceController@index')->name('admin-service');
      Route::get('service/requests', 'admin\serviceController@serviceRequest')->name('admin-service-request');
        Route::post('service/requests/confirm', 'admin\serviceController@confirmRequest')->name('admin-service-request-confirm');
      Route::get('service/add', 'admin\serviceController@add')->name('admin-service-add');
      Route::post('service/save', 'admin\serviceController@save')->name('admin-service-save');
    Route::get('service/delete/{id}', 'admin\serviceController@delete')->name('admin-service-delete');
      Route::get('service/edit/{id}', 'admin\serviceController@edit')->name('admin-service-edit');
      Route::post('service/edit/save', 'admin\serviceController@editsave')->name('admin-service-edit-save');

      //Wallet
        Route::get('transaction/details', 'admin\walletController@index')->name('admin-transaction');
      Route::get('wallet/balance/request', 'admin\walletController@walletRequest')->name('admin-wallet-request');
    Route::get('wallet/request/delete/{id}','admin\walletController@deletrequest')->name('delete-wallet-request');
        Route::post('add/amount/{id}/{balance}', 'admin\walletController@transferBalance')->name('admin-transfer-balance');
        Route::post('add/admin/balance', 'admin\walletController@addBalance')->name('admin-add-balance');

        //Enquiry
         Route::get('inbox', 'admin\dashboardController@inbox')->name('admin-inbox');
       


      //Ajax
      Route::post('ajax/states', 'admin\ajaxController@getStates')->name('admin-ajax-state');
       Route::post('ajax/districts', 'admin\ajaxController@getDistricts')->name('admin-ajax-district');
      Route::post('ajax/subcategory', 'admin\ajaxController@getSubCategory')->name('admin-ajax-subcat');
      Route::post('ajax/products', 'admin\ajaxController@getProduct')->name('admin-ajax-product');
      Route::post('ajax/areas', 'admin\ajaxController@getArea')->name('admin-ajax-area');

      

      
      




    
});



