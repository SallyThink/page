<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mains;
use App\Content;
use App\GeneralSetting;


class IndexController extends Controller
{
    public function horizontal(Mains $mains, Content $content, GeneralSetting $generalSetting)
    {
        $pages = $mains::select('id','page_name','background')->where('published','1')->get();
        $cont = $content::select('*')->orderBy('mains_id')->get();
        $generalSetting = $generalSetting::where('published','1')->get();

        foreach($cont as $k=>$v)
        {
            $v->positionY = $v->positionY*9.5;
        }
        //dd($pages);
        return view('index', compact('pages','cont','generalSetting'));
    }
}
