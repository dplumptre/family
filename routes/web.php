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


use App\Models\AutomatedReceiver;
use App\Models\Receiver;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

Route::get('test', function (User $user) {
    dd((new Receiver())->TakeAllPendingReceivers());
    return redirect()->route('dashboard');
});
/*
 * AUTH ROUTE
 */
Auth::routes();
Route::get('logout', function () {
    if (auth()->user()):
        Auth::logout();
        notify()->flash('Logged Out', 'success', ['text' => 'You have been logged out successfully']);
    endif;
    return redirect()->route('login');
});
/*
 * Login routes
 */
Route::group(
    ['prefix' => 'user'], function () {

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
    ['prefix' => 'user-area', 'middleware' => ['auth']], function () {
    Route::get('/', 'UserController@index')->name('dashboard');
    Route::get('dashboard', 'UserController@index');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::post('profile', 'UserController@postProfile')->name('post.profile');
    Route::get('change-password', 'UserController@changePassword')->name('change.password');
    Route::post('change-password', 'UserController@postChangePassword')->name('post.change.password');
    Route::get('update-details', 'UserController@updateDetails')->name('update-details');
    Route::get('outgoing', 'UserController@outgoing')->name('outgoing');
    Route::post('outgoing', 'UserController@postOut')->name('post.outgoing');
    Route::get('incoming', 'UserController@incoming')->name('incoming');
    Route::post('incoming', 'UserController@postIn')->name('post.incoming');
    Route::get('donate', 'UserController@donate')->name('donate');
    Route::post('donate', 'UserController@postDonate')->name('post.donate');
    Route::delete('donate/{id}', 'UserController@destroyDonation')->name('del.donation');
    Route::get('upload/{id}', 'UserController@upload')->name('upload');
    Route::post('upload', 'UserController@postupload')->name('post.upload');
    Route::get('news', 'UserController@news')->name('newz');
    Route::post('news', 'UserController@postNews')->name('post.news'); 
    Route::delete('news/{id}', 'UserController@destroyNews')->name('del.newz');
    Route::get('view-news/{id}', 'UserController@viewNews')->name('viewnewz');   
    
  Route::get('dashboard-admin', 'UserController@dashboardAdmin')->name('dashboard-admin');
});


//Route::get('admin-area/', 'AdministratorController@index');
Route::group(
    ['prefix' => 'admin-area', 'middleware' => ['auth', 'roles']], function () {
    Route::get('/', ['uses' => 'AdministratorController@index', 'roles' => ['superadmin', 'admin']])->name('admin-dashboard');
});

//Route::get('/', 'PagesController@home');
Route::name('home')->get('/', 'PagesController@home');
Route::name('about')->get('about', 'PagesController@about');
Route::name('news')->get('news', 'PagesController@news');
Route::name('faq')->get('faq', 'PagesController@faq');
Route::name('contact')->get('contact', 'PagesController@contact');
Route::name('post.contact')->post('contact', 'PagesController@postcontact');
//Route::name('login')->get('login', 'PagesController@login');
//Route::name('register')->get('register', 'PagesController@register');

Route::get('/home', 'HomeController@index');

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth','roles'], 'namespace' => 'Admin', 'roles'=>['superadmin', 'admin']], function () {
    //Route::get('/roles', ['uses'=>'AdminController@roleIndex', 'middleware'=>'roles', 'roles'=>['admin']]);
    Route::get('roles', 'AdminController@roleIndex')->name('roles');
    Route::post('roles', 'AdminController@postRole')->name('post.role');

    Route::get('automated-receivers', 'AdminController@automatedReceivers')->name('automated-receivers');
    Route::post('automated-receivers', 'AdminController@PostAutomatedReceivers')->name('post.automated-receivers');

    Route::get('pairs', 'AdminController@Pairs')->name('pairs');
    Route::post('pairs', 'AdminController@POstPairs')->name('post.pairs');

    Route::get('receivers', 'AdminController@Receivers')->name('receivers');
    Route::post('receivers', 'AdminController@PostReceivers')->name('post.receivers');

    Route::get('users', 'AdminController@Users')->name('users');
    Route::get('search-user', 'AdminController@SearchUser')->name('search.user');

    Route::get('api/disabled-users', 'AdminController@ApiDisabledUsers');
    Route::get('disabled-users', 'AdminController@DisabledUsers')->name('disabled.users');
    Route::post('disabled-users', 'AdminController@PostDisabledUsers')->name('post.disabled.users');

    Route::get('api/defaulters', 'AdminController@ApiDefaulters');
    Route::get('defaulters', 'AdminController@defaulters')->name('defaulters');


    Route::get('/api-tokens', 'AdminController@apiTokens');
});
