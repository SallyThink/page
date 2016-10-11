<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mains;
use App\Content;


class IndexController extends Controller
{
    public function horizontal(Mains $mains, Content $content)
    {
        $pages = $mains::where('published',1)->get();
        $cont = $content::select('*')->orderBy('mains_id')->get();

        /*$keys = [];
        foreach($cont as $k=>$v)
        {
            $keys[$v->mains_id][] = $v->positionY*4;
        }
        $max = [];
        foreach($keys as $k=>$v)
        {
            $max[$k] = min($keys[$k]);
        }
        foreach($cont as $k=>$v)
        {
            $v->positionY = $v->positionY*3.8;
        }
        $last = [];
        for($i = 0; $i<count($cont); ++$i)
        {
            if(!isset($last[$cont[$i]->mains_id][0]))
            {
                $last[$cont[$i]->mains_id][0] = $cont[$i]->positionY;
            }
            else
            {
                $newLast = $cont[$i]->positionY;
                $cont[$i]->positionY = $cont[$i]->positionY - $last[$cont[$i]->mains_id][0];
                $last[$cont[$i]->mains_id][0] = $newLast;
            }
        }*/
        foreach($cont as $k=>$v)
        {
            $v->positionY = $v->positionY*9.5;
        }
        return view('index', compact('pages','cont'));
    }
}
