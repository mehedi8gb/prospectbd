<?php

use App\Models\Translations;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

function translate($key, $lang = null){
    if($lang == null){
        $lang = App::getLocale();
    }

    $translation_def = Translations::where('lang', env('DEFAULT_LANGUAGE', 'en'))->where('lang_key', $key)->first();
    if($translation_def == null){
        $translation_def = new Translations;
        $translation_def->lang = env('DEFAULT_LANGUAGE', 'en');
        $translation_def->lang_key = $key;
        $translation_def->lang_value = $key;
        $translation_def->save();
    }

    //Check for session lang
    $translation_locale = Translations::where('lang_key', $key)->where('lang', $lang)->first();
    if($translation_locale != null && $translation_locale->lang_value != null){
        return $translation_locale->lang_value;
    }
    elseif($translation_def->lang_value != null){
        return $translation_def->lang_value;
    }
    else{
        return $key;
    }
}

//highlights the selected navigation on admin panel
if (! function_exists('areActiveRoutes')) {
    function areActiveRoutes(Array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }

    }
}






?>
