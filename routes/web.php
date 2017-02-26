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
Route::group(
    ['prefix'=>'user-area', 'middleware'=>'auth'], function(){
    Route::name('dashboard')->get('/', 'UserController@index');
    Route::name('profile')->get('profile', 'UserController@profile');
    Route::get('outgoing', 'UserController@outgoing');
    Route::get('incoming', 'UserController@incoming');
    
    Route::get('bank', 'UserController@bank');
    Route::post('bank', 'UserController@createBank');
    
    
    Route::get('donate', 'UserController@donate');
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
