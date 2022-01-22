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

Route::get('/admin', 'AdminController@loginAdmin')->name('admin');
Route::post('/admin', 'AdminController@postloginAdmin');
Route::get('/admin/logout', 'AdminController@logoutAdmin')->name('logoutAdmin');
Route::get('/home', function () {
    return view('home');
})->name('admin.home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{id}', 'HomeController@detail')->name('detail');
Route::get('/product/addToCart/{id}', 'HomeController@addToCart')->name('addToCart');
Route::get('/product/showCart', 'HomeController@showCart')->name('showCart');
Route::get('/product/updateCart', 'HomeController@updateCart')->name('updateCart');
Route::get('/product/deleteCart/{id}', 'HomeController@deleteCart')->name('deleteCart');
Route::get('category/{slug}/{id}', [
    'as' => 'category.product',
    'uses' => 'CategoryController@category',
]);
Route::get('login', [
    'as' => 'user.login',
    'uses' => 'UserController@login',
]);
Route::post('login', [
    'as' => 'user.postlogin',
    'uses' => 'UserController@postlogin',
]);
Route::get('logout', [
    'as' => 'user.logout',
    'uses' => 'UserController@logout',
]);
Route::post('register', [
    'as' => 'user.register',
    'uses' => 'UserController@register',
]);
Route::post('addComment', [
    'as' => 'comment.store',
    'uses' => 'CommentController@store',
]);
