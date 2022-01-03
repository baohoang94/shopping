<?php

Route::prefix('admin')->group(function () {
    Route::prefix('slider')->group(function () {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'SliderAdminController@index'
        ]);
        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'SliderAdminController@create'
        ]);
        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'SliderAdminController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'slider.edit',
            'uses' => 'SliderAdminController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'slider.update',
            'uses' => 'SliderAdminController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'slider.delete',
            'uses' => 'SliderAdminController@delete'
        ]);
    });
});
