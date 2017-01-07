<?php

namespace App\Http\Controllers;

use App\Mains;
use App\Content;
use App\GeneralSetting;
use App\FormField;
use App\Map;
use App\Ribbon;
use App\Lazyload;

class IndexController extends Controller
{
    public function horizontal(Mains $mains, Content $content, GeneralSetting $generalSetting,
                               FormField $formField, Map $map, Ribbon $ribbon, Lazyload $lazyload)
    {
        $forms = $formField->getFormFields();
        $pages = $mains->main();
        $cont = $content->getContent($forms);
        $generalSetting = $generalSetting::where('published','1')->get();
        $maps = $map::select('*')->get();
        $ribbon = $ribbon::where('published','1')->get();
        $lazyload = $lazyload::where('published','1')->latest()->get();

        return view('index', compact('pages','cont','generalSetting', 'maps', 'ribbon', 'lazyload'));
    }

    public function owl()
    {

        return view('owl');
    }
}
