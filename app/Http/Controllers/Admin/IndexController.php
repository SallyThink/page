<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin\index');
    }

    public function sideBar(AdminRequest $request)
    {
        session(
            ['sideBar' =>
                [
                    'openAfterDownload' => $request->get('openAfterDownload')
                ]
            ]);
    }
}
