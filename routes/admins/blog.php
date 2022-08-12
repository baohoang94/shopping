<?php

Route::prefix('admin')->group(function () {
    Route::prefix('blogs')->group(function () {
        Route::get('/', [
            'as' => 'blogs.index',
            'uses' => 'AdminBlogController@index'
        ]);
        Route::get('/create', [
            'as' => 'blogs.create',
            'uses' => 'AdminBlogController@create'
        ]);
        Route::post('/store', [
            'as' => 'blogs.store',
            'uses' => 'AdminBlogController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'blogs.edit',
            'uses' => 'AdminBlogController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'blogs.update',
            'uses' => 'AdminBlogController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'blogs.delete',
            'uses' => 'AdminBlogController@delete'
        ]);
    });
});
