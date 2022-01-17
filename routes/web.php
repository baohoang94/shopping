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
