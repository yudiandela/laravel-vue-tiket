<?php

Route::get('/', function () {
    return view('welcome');
});

/** Auth route */
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('user')->name('user.')->group( function () {
        /** user dashboard */
        Route::get('/profile', 'ProfileController@index')->name('profile.index');
        Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
        Route::put('/profile/{id}', 'ProfileController@update')->name('profile.update');
    });

    Route::prefix('admin')->name('admin.')->group( function () {
        /** admin route */
        Route::get('/', 'AdminController@index')->name('index');

        /** armada route */
        Route::get('/armada', 'ArmadaController@index')->name('armada.index');
        Route::post('/armada', 'ArmadaController@store')->name('armada.store');
        Route::get('/armada/create', 'ArmadaController@create')->name('armada.create');
    });
});
