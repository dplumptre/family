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

Route::get('test', function(){

    dd(auth()->user()->userDetails);

});



/*
 * AUTH ROUTE
 */
Auth::routes();

/*
 * Login routes
 */
Route::group(
    ['prefix'=>'user'], function(){

    Route::name('user.login')->get('login', 'SessionsController@create')->middleware('guest');
    Route::name('post.login')->post('login', 'SessionsController@store')->middleware('guest');

    Route::name('user.logout')->get('logout', 'SessionsController@destroy')->middleware('auth');
    Route::name('post.logout')->post('logout', 'SessionsController@destroy')->middleware('auth');

    Route::name('user.register')->get('register', 'RegisterController@create')->middleware('guest');
    Route::name('post.register')->post('register', 'RegisterController@store')->middleware('guest');

});


/*
 *  ROUTE FOR LOGIN USERS
 *  MUST BE  AUTHENTICATED 
 *  UserController
 */
Route::get('dashboard', 'UserController@index');
Route::group(
    ['prefix'=>'user-area', 'middleware'=>'auth'], function(){
    Route::get('/', 'UserController@index')->name('dashboard');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::get('change-password', 'UserController@changePassword')->name('change.password');
    Route::post('change-password', 'UserController@postChangePassword')->name('post.change.password');
    Route::get('update-details', 'UserController@updateDetails')->name('update-details');
    Route::get('outgoing', 'UserController@outgoing');
    Route::get('incoming', 'UserController@incoming');
    Route::get('donate', 'UserController@donate')->name('donate');
    Route::post('donate', 'UserController@postDonate')->name('post.donate');
});


//Route::get('/', 'PagesController@home');
Route::name('home')->get('/', 'PagesController@home');
Route::name('about')->get('about', 'PagesController@about');
Route::name('news')->get('news', 'PagesController@news');
Route::name('faq')->get('faq', 'PagesController@faq');
Route::name('contact')->get('contact', 'PagesController@contact');
//Route::name('login')->get('login', 'PagesController@login');
//Route::name('register')->get('register', 'PagesController@register');



Route::get('/home', 'HomeController@index');
