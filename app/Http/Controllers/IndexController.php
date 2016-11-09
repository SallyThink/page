<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mains;
use App\Content;
use App\GeneralSetting;
use App\FormField;
use App\Font;
use App\Map;
use App\Ribbon;

class IndexController extends Controller
{
    public function horizontal(Mains $mains, Content $content, GeneralSetting $generalSetting,
                               FormField $formField, Map $map, Ribbon $ribbon)
    {
        $forms = $formField->getFormFields();
        $pages = $mains::select('mains.id', 'mains.page_name', 'mains.background_color', 'mains.background_image', 'fonts.font_name', 'fonts.font_url')->leftJoin('fonts','fonts.id','=','mains.font_id')->where('mains.published','1')->get();
        $cont = $content->getContent($forms);
        $generalSetting = $generalSetting::where('published','1')->get();
        $maps = $map::select('*')->get();
        $ribbon = $ribbon::where('published','1')->get();

        return view('index', compact('pages','cont','generalSetting', 'maps', 'ribbon'));
    }

}
