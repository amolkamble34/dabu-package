<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::get('/install/pre-requisite', 'Dabu\Service\Controllers\InstallController@preRequisite');
    Route::post('/install/validate/{option}', 'Dabu\Service\Controllers\InstallController@store');
    Route::post('/install', 'Dabu\Service\Controllers\InstallController@store');
    Route::post('/license', 'Dabu\Service\Controllers\LicenseController@verify');

    Route::post('/biometric', 'Dabu\Service\Controllers\AttendanceController@read');
    Route::post('/biometric/v2', 'Dabu\Service\Controllers\AttendanceController@readV2');

    Route::get('/about', 'Dabu\Service\Controllers\HomeController@about');
    Route::get('/support', 'Dabu\Service\Controllers\SupportController@index');
    Route::post('/support', 'Dabu\Service\Controllers\SupportController@submit');
    Route::get('/update', 'Dabu\Service\Controllers\UpdateController@index');
    Route::post('/download', 'Dabu\Service\Controllers\UpdateController@download');
    Route::post('/update', 'Dabu\Service\Controllers\UpdateController@update');
    Route::post('/help/content', 'Dabu\Service\Controllers\HomeController@helpDoc');

    Route::get('/license/validate', 'Dabu\Service\Controllers\HomeController@licenseValidate');
});
