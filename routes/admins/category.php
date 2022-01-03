<?php

Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('index', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index',
            'middleware' => 'can:category-list'
        ]);
        Route::get('create', [
            'as' => 'categories.create',
            'uses' => 'CategoryController@create',
            'middleware' => 'can:category-add'
        ]);
        Route::post('store', [
            'as' => 'categories.store',
            'uses' => 'CategoryController@store',
            'middleware' => 'can:category-add'
        ]);
        Route::get('edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit',
            'middleware' => 'can:category-edit'
        ]);
        Route::post('update/{id}', [
            'as' => 'categories.update',
            'uses' => 'CategoryController@update',
            'middleware' => 'can:category-edit'
        ]);
        Route::get('delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'CategoryController@delete',
            'middleware' => 'can:category-delete'
        ]);
    });
});
