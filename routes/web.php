<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::match(['GET','POST'],'/','AdminController@login');

    Route::group(['middleware'=>['admin']], function(){
        // Admin
        Route::get('dashboard','AdminController@dashboard');
        Route::get('logout','AdminController@logout');

        Route::get('eventPage', 'mainPageController@event');
        Route::match(['get','post'], 'add-edit-event/{id?}','mainPageController@addEditEvent');
        Route::get('delete-event/{id}', 'mainPageController@deleteEvent');

    });
});

Route::namespace('App\Http\Controllers\Front')->group(function () {
    // Home page route
    Route::get('/', 'IndexController@index')->name('index');

    Route::get('/bio', 'IndexController@bio');
    Route::get('/contact', 'IndexController@contact');
});
