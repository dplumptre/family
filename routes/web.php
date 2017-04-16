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


use App\Models\Pair;
use App\Models\Role;
use Carbon\Carbon;
use App\Models\Payer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('test', function (\App\Lib\MakePayerReceiver $makePayerReceiver) {
    dd($makePayerReceiver->getCompletedPayers()[0]->finishPayer());
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
    ['prefix' => 'user-area', 'middleware' => 'auth'], function () {
    Route::get('/', 'UserController@index')->name('dashboard');
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
    Route::get('upload/{id}', 'UserController@upload')->name('upload');
    Route::post('upload', 'UserController@postupload')->name('post.upload');
    
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
//Route::name('login')->get('login', 'PagesController@login');
//Route::name('register')->get('register', 'PagesController@register');

Route::get('/home', 'HomeController@index');

Route::group(
    ['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    //Route::get('/roles', ['uses'=>'AdminController@roleIndex', 'middleware'=>'roles', 'roles'=>['admin']]);
    Route::get('/roles', ['uses' => 'AdminController@roleIndex',]);
    Route::post('/roles', 'AdminController@postRole')->name('post.role');
    Route::get('/api-tokens', 'AdminController@apiTokens');
});
