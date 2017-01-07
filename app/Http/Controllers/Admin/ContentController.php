<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function allContent(Content $content)
    {
        $all = $content::all();

        return view('admin.content.allContent', compact('all'));
    }

    public function newContent()
    {
        return view('admin.content.content');
    }
}
