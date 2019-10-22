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


/** ****************************************************** **
 **                       HOME ROUTES                      **
 ********************************************************* **/
    Route::get('/','Pages\HomePageController@index');
    Route::get('/home', 'HomeController@index')->name('home');
/**  ****************************************************  **/





/** ****************************************************** **
 **                       AUTH ROUTES                      **
 ********************************************************* **/
    Auth::routes();
/**  ****************************************************  **/





/** ****************************************************** **
 **               MODULE INNOVAR (Tech) ROUTES             **
 ********************************************************* **/
    //Route::get('/courses','Models\CourseController@showAll');
    //Route::get('/courses','Models\CourseController@showAll');
/**  ****************************************************  **/





/** ****************************************************** **
 **                       ADMIN ROUTES                     **
 ********************************************************* **/
    //Route::get('/admin','Pages\AdminPageController@index');
    //Route::post('/admin/auth/login','Pages\AdminPageController@login');
    //Route::post('/admin/auth/logout','Pages\AdminPageController@logout');
/**  ****************************************************  **/






//Route::get('/app','Pages\AppPageController@index');
//Route::get('/courses','Pages\CoursesPageController@index');
//Route::get('/shop','Pages\ShopPageController@index');
//Route::get('/payment','Pages\PaymentPageController@index');
//Route::get('/terms','Pages\TermsPageController@index');


