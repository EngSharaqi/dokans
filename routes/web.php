<?php

Route::get('/','FrontendController@welcome')->name('welcome');

Route::get('/priceing','FrontendController@priceing')->name('priceing');

Route::get('/merchant/plan/{id}','FrontendController@register_view')->name('merchant.form');

//Route::post('/merchant/plan/{id}','FrontendController@register')->name('merchant.register-make');

Route::get('/service','FrontendController@service')->name('service');

Route::get('/contact','FrontendController@contact')->name('contact');

Route::get('/page/{slug}','FrontendController@page')->name('page');

Route::post('/send-email','FrontendController@send_mail')->name('send_mail');

Route::get('/login','Customer\LoginController@loginIndex')->name('login');

Route::get('/translate','FrontendController@translate')->name('translate');

Route::post('/login','Customer\LoginController@login')->name('login');

Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'auth:customer'], function () {
        Route::group(['middleware' => ['role:superadmin']], function () {
        Route::get('/dashboard','Admin\AdminController@dashboard')->name('admin.dashboard.static');
        });
    });
});
