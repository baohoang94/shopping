<?php

Route::prefix('admin')->group(function () {
    Route::prefix('permissions')->group(function () {
        Route::get('/create', [
            'as' => 'permissions.create',
            'uses' => 'AdminPermissionController@createPermission'
        ]);
        Route::post('/store', [
            'as' => 'permissions.store',
            'uses' => 'AdminPermissionController@store'
        ]);
    });
});
