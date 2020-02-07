<?php

use Illuminate\Http\Request;
Route::group(['middleware' => 'auth:api'], function () {

    Route::get('plugins', 'ApiPluginController@index');

    Route::get('plugins/{id}', 'ApiPluginController@show');

    Route::post('plugins/create', 'ApiPluginController@store');

    Route::post('plugins/update/{id}', 'ApiPluginController@update');

    Route::delete('plugins/delete/{id}', 'ApiPluginController@delete');

});

