<?php

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function() {

    Route::get('/', function () {
        return view('index');
    })->name('index');

    //公司概况
    Route::get('about', 'CategoriesController@getCategoryByParent')->name('about');

    //服务业务
    Route::redirect('retail', 'it-service')->name('retail');
    Route::get('it-service', 'CategoriesController@getCategoryDetail')->name('retail.it-service');
    Route::get('it-base', 'CategoriesController@getCategoryDetail')->name('retail.it-base');
    Route::get('defend', 'CategoriesController@getCategoryDetail')->name('retail.defend');
    Route::get('newretail', 'CategoriesController@getCategoryDetail')->name('retail.newretail');
    Route::get('retailsale', 'CategoriesController@getCategoryDetail')->name('retail.retailsale');
    Route::get('itsale', 'CategoriesController@getCategoryDetail')->name('retail.itsale');

    //SAAS服务
    Route::redirect('saas', 'saas-service')->name('saas');
    Route::get('saas-service', 'CategoriesController@getSaasDetail')->name('saas.saas-service');
//    Route::redirect('saas-center', 'saas-center#a1');
    Route::get('saas-center', 'CategoriesController@getCenterDetail')->name('saas.saas-center');



    Route::get('sass-service', function () {
        return view('saas/saas-service');
    });





    Route::get('localization', function() {
        return view('localization');
    });




});
