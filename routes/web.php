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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/ani_signup', function () {
    return view('portal.ani_signup');
});

Route::get('/admin', function () {
	return view('portal.dashboard');
})->name('admin.dashboard')->middleware(['auth', 'admin']);;

Route::prefix('admin')->group(function () {
    Route::get('login', function () {
        return view('portal.login');
    })->name('adminlogin');

	Route::post('/login_get','AdminController@loginGet')->name('admin.login');

	Route::group(['middleware' => ['auth', 'admin']],function(){

Route::get('/business_profiles', 'BusinessController@BusinessProfiles');

Route::get('/logout', 'AdminController@logout');
});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


    
  
      


