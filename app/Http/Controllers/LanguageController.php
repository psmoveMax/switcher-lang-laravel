<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index() {
        App::setLocale(Session::get('locale', 'ru2'));

        switch (App::getLocale()) {
            case 'ru':
                $currentLanguage = 'Русский';
                break;
            case 'ru2':
                $currentLanguage = 'Ru2';
                break;
            case 'en':
                $currentLanguage = 'English';
                break;
        }
        return view('language-form', compact('currentLanguage'));
    }

}
