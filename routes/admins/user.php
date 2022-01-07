<?php

Route::prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'AdminUserController@index'
        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'AdminUserController@create'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'AdminUserController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'AdminUserController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'AdminUserController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'AdminUserController@delete'
        ]);
        Route::get('/changePassword', [
            'as' => 'users.changePassword',
            'uses' => 'AdminUserController@changePassword'
        ]);
        Route::post('/updatePassword', [
            'as' => 'users.updatePassword',
            'uses' => 'AdminUserController@updatePassword'
        ]);
    });
});
