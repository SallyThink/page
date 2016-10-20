<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mains;
use App\Content;
use App\GeneralSetting;
use App\Form;

class IndexController extends Controller
{
    public function horizontal(Mains $mains, Content $content, GeneralSetting $generalSetting, Form $form)
    {
        $forms = $form->getForms();
        $pages = $mains::select('id','page_name','background')->where('published','1')->get();
        $cont = $content->getContent($forms);
        $generalSetting = $generalSetting::where('published','1')->get();


        return view('index', compact('pages','cont','generalSetting'));
    }
    
    private function forms()
    {
        
    }
}
