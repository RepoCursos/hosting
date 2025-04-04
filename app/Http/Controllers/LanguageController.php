<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /** este controlador es para recepsionar la variable del idioma que elegimos  */
    public function switchLang($lang)
    {
        /** Comprobamos si el lenguaje seleccionado existe en mi configuracio "config.languages" */
        if (array_key_exists($lang, Config::get('languages'))) {
            // si existe crea la variable con el valor sellecionado y modifica el 'locale'
            Session::put('applocale', $lang);
        }

        return Redirect::back();
    }
}
