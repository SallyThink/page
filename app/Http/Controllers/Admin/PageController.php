<?php

namespace App\Http\Controllers\Admin;

use App\Mains;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function allPages()
    {
        $all = Mains::all();

        return view('admin.pages.allPages', compact('all'));
    }

    public function newPage()
    {
        return view('admin.pages.page', compact('item'));
    }

    public function createPage(AdminRequest $request, Mains $mains)
    {
      $mains::create($request->all());

      return redirect()->route('admin.allPages');
    }

    public function editPage($id)
    {
      $item = Mains::where('id', $id)->get();

      return view('admin.pages.page', ['form' => $item->get(0)]);
    }

    public function updatePage($id)
    {
        $request = AdminRequest::capture();

        Mains::where('id', $id)->update($request->except('_method', '_token'));

        return redirect()->route('admin.allPages');
    }
}
