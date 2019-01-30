<?php

// Use Auth;
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

Route::get('/', function () {
    return view('Home.index');
});

Route::get('login', 'AdminController@login')->name('login');

/* Home Routes
=============================================*/
// Route::get('/','HomeController@index')->name('home');
Route::get('/resume','HomeController@showResume')->name('resume');
Route::get('/work','HomeController@showProjects')->name('projects');



/* ContactUs  Routes
=============================================*/
Route::POST('/contactus/send-email','ContactUsController@sendEmail')->name('send-email');
Route::get('/contactus/hire-me','ContactUsController@index')->name('hire-me');



/* Admin  Routes
=============================================*/
Route::get('/admin','AdminController@login')->name('admin');
Route::get('/admin/dashboard','AdminController@dashboard')->name('admin-dashboard');

Route::post('/admin/do-login','LoginController@doLogin')->name('admin-login');
Route::get('/admin/logout','LoginController@logout')->name('admin-logout');


/* post  Routes
=============================================*/
Route::resource('/post','PostController');


/* Lead  Routes
=============================================*/
Route::group(array('prefix'=>'lav'),function(){
    Route::get('/leads','LeadController@index')->name('lead-list');
    Route::get('/leads/{id}','LeadController@show')->name('view-leads');
});



/* User Routes
=============================================*/
Route::get('/profile/edit-profile','ProfileController@edit')->name('edit-profile');


/* tech-blog Routes
=============================================*/
Route::get('/tech-blog','TechBlogController@index')->name('tech-blog-index');