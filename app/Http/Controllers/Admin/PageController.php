<?php

namespace App\Http\Controllers\Admin;

use App\Mains;
use App\Http\Requests\AdminRequest;

class PageController extends DefaultController implements AdminInterface
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
      $mains = new Mains();
      $this->toSave($mains, (new AdminRequest())::capture());

      return redirect()->route('admin.all', 'page');
    }

    public function edit($id)
    {
      $item = Mains::find($id)->get();

      return view('admin.page', ['name' => 'page', 'form' => $item->get(0)]);
    }

    public function update($id)
    {
        $this->toSave(new Mains(), (new AdminRequest())::capture(), $id);

        return redirect()->route('admin.all', 'page');
    }

    public function delete($id)
    {
        Mains::find($id)->delete();

        return redirect()->route('admin.all', 'page');
    }
}
