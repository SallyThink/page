<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin\index');
    }

    public function sideBar(AdminRequest $request)
    {
        session(
            ['sideBar' =>
                ['openAfterDownload' =>
                    $request->get('openAfterDownload')
                ]
            ]
        );

    }
}
