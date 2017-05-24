<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\PageRequest;
use App\Mains;

class PageController extends DefaultController
{

    public function all()
    {
        $all = Mains::all();

        return view('admin.pages.allPages', compact('all'));
    }

    public function new()
    {
        return view('admin.pages.page');
    }

    public function create()
    {
      $this->toSave(new Mains(), (new PageRequest())::capture());

      return redirect()->route('admin.all', 'page');
    }

    public function edit($id)
    {
      $item = Mains::findOrFail(['id'=>$id]);

      return view('admin.pages.page', ['form' => $item->get(0)]);
    }

    public function update($id)
    {
        $this->toSave(new Mains(), (new PageRequest())::capture(), $id);

        return redirect()->route('admin.all', 'page');
    }

    public function delete($id)
    {
        Mains::find($id)->delete();

        return redirect()->route('admin.all', 'page');
    }
}
