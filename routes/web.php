<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', [LanguageController::class, 'index']);

Route::get('lang/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return back();
})->name('changeLang');
