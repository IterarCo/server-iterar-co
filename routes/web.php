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
    //Route::get('/home', 'HomeController@index')->name('home');
/**  ****************************************************  **/


/** ****************************************************** **
 **                       AUTH ROUTES                      **
 ********************************************************* **/
    Auth::routes();
/**  ****************************************************  **/


/** ****************************************************** **
 **                    CORE MODULES ROUTES                 **
 ********************************************************* **/

    Route::get('/resources/signin','Resources\AuthController@showSignIn');
    Route::get('/resources/signup','Resources\AuthController@showSignUp');
    Route::get('/resources/dashboard','Resources\DashboardController@show');

    Route::post('/resources/signin','Resources\AuthController@doSignIn');
    Route::post('/resources/signup','Resources\AuthController@doSignUp');
    Route::post('/resources/signout','Resources\AuthController@doSignOut');


    Route::resource('/resources/companies', 'Resources\Company\CompanyController');

    /*
    Route::resource('/resources/roles', 'Resources\Rol\RolController');
    Route::resource('/resources/users', 'Resources\User\UserController');


    Route::resource('/resources/companies_organization', 'Resources\Company\OrganizationController');
    Route::resource('/resources/companies_departments', 'Resources\Company\DeparmentController');

    Route::resource('/resources/courses', 'Resources\Course\CourseController');
    Route::resource('/resources/courses_classes', 'Resources\Class\ClassController');
    Route::resource('/resources/courses_exams', 'Resources\Exam\ExamController');
    Route::resource('/resources/courses_questions', 'Resources\Question\QuestionController');
    */

/**  ****************************************************  **/


/** ****************************************************** **
 **                       ADMIN ROUTES                     **
 ********************************************************* **/
   // Route::get('/admin','Pages\AdminPageController@index');
    //Route::post('/admin/auth/login','Pages\AdminPageController@login');
    //Route::post('/admin/auth/logout','Pages\AdminPageController@logout');
/**  ****************************************************  **/






//Route::get('/app','Pages\AppPageController@index');
//Route::get('/courses','Pages\CoursesPageController@index');
//Route::get('/shop','Pages\ShopPageController@index');
//Route::get('/payment','Pages\PaymentPageController@index');
//Route::get('/terms','Pages\TermsPageController@index');


