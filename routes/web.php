<?php

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group( function () {
    /** admin route */
    Route::get('/', 'AdminController@index')->name('index');

    /** armada route */
    Route::get('/armada', 'ArmadaController@index')->name('armada.index');
    Route::post('/armada', 'ArmadaController@store')->name('armada.store');
    Route::get('/armada/create', 'ArmadaController@create')->name('armada.create');
});
