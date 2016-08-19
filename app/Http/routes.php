<?php

Route::group([   'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function()
{

    Route::get('/', function () {
        return view('login_registration.login');
    })->name('welcome');
    Route::group(['prefix' => 'auth'], function () {

        Route::get('{provider}', 'LoginController@redirectToProvider')->name('provider');
        Route::get('{provider}/callback', 'LoginController@handleProviderCallback');

    });
  Route::group(['middleware' => 'auth'], function () {

        Route::get('/dashboard', [
                'uses' => 'HomeController@index',
                'as' => 'home.dashboard'
            ]
        );
    Route::get('/logout', ['uses' => 'LoginController@getLogout', 'as' => 'logout']);
    });


});