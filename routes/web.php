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





/*
 * AUTH ROUTE
 */
Auth::routes();





/*
 *  ROUTE FOR NORMAL PAGES
 *  NO AUTH 
 *  WelcomeController
 */
#Route::get('/', 'WelcomeController@index');







/*
 *  ROUTE FOR LOGIN USERS
 *  MUST BE  AUTHENTICATED 
 *  UserController
 */
Route::get('/user-area', 'UserController@index');
Route::get('/user-area/profile', 'UserController@profile');
Route::get('/user-area/outgoing', 'UserController@outgoing');
Route::get('/user-area/incoming', 'UserController@incoming');
Route::get('/user-area/bank', 'UserController@bank');
Route::get('/user-area/donate', 'UserController@donate');


//Route::get('/', 'PagesController@home');
Route::name('home')->get('/', 'PagesController@home');
Route::name('about')->get('about', 'PagesController@about');
Route::name('news')->get('news', 'PagesController@news');
Route::name('faq')->get('faq', 'PagesController@faq');
Route::name('contact')->get('contact', 'PagesController@contact');
//Route::name('login')->get('login', 'PagesController@login');
//Route::name('register')->get('register', 'PagesController@register');



Route::get('/home', 'HomeController@index');
