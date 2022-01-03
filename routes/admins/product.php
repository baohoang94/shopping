<?php

Route::prefix('admin')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('/', [
            'as' => 'product.index',
            'uses' => 'AdminProductController@index',
            'middleware' => 'can:product-list'
        ]);
        Route::get('/create', [
            'as' => 'product.create',
            'uses' => 'AdminProductController@create',
            'middleware' => 'can:product-add'
        ]);
        Route::post('/store', [
            'as' => 'product.store',
            'uses' => 'AdminProductController@store',
            'middleware' => 'can:product-add'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'product.edit',
            'uses' => 'AdminProductController@edit',
            'middleware' => 'can:product-edit,id'
        ]);
        Route::post('/update/{id}', [
            'as' => 'product.update',
            'uses' => 'AdminProductController@update',
            'middleware' => 'can:product-edit,id'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'product.delete',
            'uses' => 'AdminProductController@delete',
            'middleware' => 'can:product-delete,id'
        ]);
    });
});
