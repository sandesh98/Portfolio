<?php

Route::namespace('Website')->group(function() {

    Route::name('project.')->group(function() {
//        Route::get('/sandesh', 'ProjectsController@sandesh')->name('sandesh');
//        Route::get('/csr', 'ProjectsController@csr')->name('csr');
        Route::get('/dutchdiner', 'ProjectsController@dutchdiner')->name('dutchdiner');
//        Route::get('/technischedienst', 'ProjectsController@technischedienst')->name('technischedienst');
        Route::get('dansacademie-natraj-flyer', 'ProjectsController@natrajFlyer')->name('natraj-flyer');
        Route::get('guess-and-win', 'ProjectsController@guessAndWin')->name('guess-and-win');
        Route::get('de-cafe-koers', 'ProjectsController@deCafeKoers')->name('de-cafe-koers');
        Route::get('sportmaatje', 'ProjectsController@sportmaatje')->name('sportmaatje');
        Route::get('abc-hulplijn', 'ProjectsController@abchulplijn')->name('abc-hulplijn');
        Route::get('pscateringservices', 'ProjectsController@pscateringservices')->name('pscateringservices');
        Route::get('wecollect', 'ProjectsController@wecollect')->name('wecollect');
        Route::get('superspeurders', 'ProjectsController@superspeurders')->name('superspeurders');
//	Route::get('/brand-in-nederland', 'ProjectsController@brandInNederland')->name('brand-in-nederland');

    });

    Route::name('contact.')->group(function() {
        Route::get('/contact', 'ContactController@index')->name('index');
        Route::post('/contact', 'ContactController@store')->name('store');
    });

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/over-mij', 'ProfileController@index')->name('profile.index');
    Route::get('/projecten', 'ProjectsController@index')->name('project.index');
    Route::get('/bubba', 'HomeController@bubba')->name('home.bubba');
});

Route::namespace('Dashboard')->prefix('panel')->group(function() {
    Route::get('/', 'HomeController@index')->name('dashboard.index');

    Route::prefix('notifications')->name('notification.')->group(function() {
        Route::get('/', 'NotificationsController@index')->name('index');
        Route::get('/{notification}', 'NotificationsController@show')->name('show');
        Route::delete('/{notification}', 'NotificationsController@delete')->name('delete');
    });

//    Route::prefix('navbar')->name('navbar.')->group(function() {
//        Route::get('/', 'NavbarController@edit')->name('edit');
//        Route::put('/', 'NavbarController@update')->name('update');
//    });
//
//    Route::prefix('profile')->name('profile.')->group(function() {
//       Route::get('/', 'ProfileController@edit')->name('edit');
//       Route::put('/', 'ProfileController@update')->name('update');
//    });

    Route::prefix('password')->name('dashboard.password.')->group(function() {
       Route::get('/', 'PasswordController@edit')->name('edit');
       Route::put('/', 'PasswordController@update')->name('update');
    });
});

Route::namespace('Auth')->group(function() {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
});
