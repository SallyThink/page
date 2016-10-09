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
        return view('index', compact('pages'));
    }
}
