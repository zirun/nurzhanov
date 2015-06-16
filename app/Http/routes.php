<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['domain' => 'rocketfirm.'.getenv('APP_BASE_URL')], function () {
    Route::get('/', function () {
        return view('rocketfirm');
    });
});

Route::get('/', function () {
    return view('welcome');
});


