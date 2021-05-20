<?php

use Illuminate\Support\Facades\Route;

Route::get('/migrate', 'Dabu\Service\Controllers\InstallController@forceMigrate');
