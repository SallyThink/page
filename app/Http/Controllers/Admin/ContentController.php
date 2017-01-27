<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Mains;
use App\Http\Requests\Admin\ContentRequest;

class ContentController extends DefaultController
{
    public function all(Content $content)
    {
        $all = $content::all();

        return view('admin.content.allContent', compact('all'));
    }

    public function new(Mains $mains)
    {
        $selectPage = $mains->selectPage();

        return view('admin.content.content', compact('selectPage'));
    }

    public function create(Content $content, ContentRequest $request)
    {
        $this->toSave($content, $request);

        return redirect()->route('admin.content.all');
    }

    public function edit($id)
    {
        $item = Content::find($id)->get();
        $selectPage = (new Mains())->selectPage();

        return view('admin.content.content', ['form' => $item->get(0), 'selectPage' => $selectPage]);
    }

    public function update($id)
    {
        $this->toSave(new Content(), (new ContentRequest())::capture(), $id);

        return redirect()->route('admin.content.all');
    }

    public function delete($id)
    {
        Content::find($id)->delete();

        return redirect()->route('admin.content.all');
    }
}
