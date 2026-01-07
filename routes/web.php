<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

/** Traduction route */
Route::get('/lang/{lang}',
	[LanguageController::class, 'switchLang'])
		->name('app_language');
