<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mains;
use App\Content;
use App\GeneralSetting;
use App\FormField;
use App\Font;

class IndexController extends Controller
{
    public function horizontal(Mains $mains, Content $content, GeneralSetting $generalSetting, FormField $formField)
    {
        $forms = $formField->getFormFields();
        $pages = $mains::select('*')->leftJoin('fonts','fonts.id','=','mains.font_id')->where('mains.published','1')->get();
        $cont = $content->getContent($forms);
        $generalSetting = $generalSetting::where('published','1')->get();

        return view('index', compact('pages','cont','generalSetting'));
    }

}
