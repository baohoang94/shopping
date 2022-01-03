<?php

Route::prefix('admin')->group(function () {
    Route::prefix('menus')->group(function () {
        Route::get('index', [
            'as' => 'menus.index',
            'uses' => 'MenuController@index',
            'middleware' => 'can:menu-list'
        ]);
        Route::get('create', [
            'as' => 'menus.create',
            'uses' => 'MenuController@create'
        ]);
        Route::post('store', [
            'as' => 'menus.store',
            'uses' => 'MenuController@store'
        ]);
        Route::get('edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'MenuController@edit'
        ]);
        Route::post('update/{id}', [
            'as' => 'menus.update',
            'uses' => 'MenuController@update'
        ]);
        Route::get('delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'MenuController@delete'
        ]);
    });
});
