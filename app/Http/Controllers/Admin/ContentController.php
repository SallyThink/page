<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Mains;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function allContent(Content $content)
    {
        $all = $content::all();

        return view('admin.content.allContent', compact('all'));
    }

    public function newContent(Mains $mains)
    {
        $selectPage = $mains->selectPage();

        return view('admin.content.content', compact('selectPage'));
    }
}
