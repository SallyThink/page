<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Mains;
use App\Http\Requests\Admin\ContentRequest;

class ContentController extends DefaultController
{
    public function all()
    {
        $content = new Content();
        $all = $content::all();

        return view('admin.content.allContent', compact('all'));
    }

    public function new()
    {
        $mains = new Mains();
        $selectPage = $mains->selectPage();

        return view('admin.content.content', compact('selectPage'));
    }

    public function create()
    {
        $content = new Content();
        $request = (new ContentRequest())::capture();
        $this->toSave($content, $request);

        return redirect()->route('admin.all', 'content');
    }

    public function edit($id)
    {
        $item = Content::findOrFail($id)->get();
        $selectPage = (new Mains())->selectPage();

        return view('admin.content.content', ['form' => $item->get(0), 'selectPage' => $selectPage]);
    }

    public function update($id)
    {
        $this->toSave(new Content(), (new ContentRequest())::capture(), $id);

        return redirect()->route('admin.all', 'content');
    }

    public function delete($id)
    {
        Content::find($id)->delete();

        return redirect()->route('admin.all', 'content');
    }
}
