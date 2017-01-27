<?php

namespace App\Http\Controllers\Admin;

use App\Mains;
use App\Http\Requests\AdminRequest;

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

    public function create(Mains $mains)
    {
      $this->toSave($mains, new AdminRequest());

      return redirect()->route('admin.page.all');
    }

    public function edit($id)
    {
      $item = Mains::where('id', $id)->get();

      return view('admin.pages.page', ['form' => $item->get(0)]);
    }

    public function update($id)
    {
        $this->toSave(new Mains(), (new AdminRequest())::capture(), $id);

        return redirect()->route('admin.page.all');
    }

    public function delete($id)
    {
        Mains::find($id)->delete();

        return redirect()->route('admin.page.all');
    }
}
