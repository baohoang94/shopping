<?php

Route::prefix('admin')->group(function () {
    Route::prefix('settings')->group(function () {
        Route::get('/', [
            'as' => 'settings.index',
            'uses' => 'AdminSettingController@index'
        ]);
        Route::get('/create', [
            'as' => 'settings.create',
            'uses' => 'AdminSettingController@create'
        ]);
        Route::post('/store', [
            'as' => 'settings.store',
            'uses' => 'AdminSettingController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'settings.edit',
            'uses' => 'AdminSettingController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'settings.update',
            'uses' => 'AdminSettingController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'settings.delete',
            'uses' => 'AdminSettingController@delete'
        ]);
    });
});
