<?php

namespace App\Http\Controllers\Admin;

use App\GeneralSetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;

class GeneralSettingsController extends Controller
{
    public function all()
    {
        $generalSetting = GeneralSetting::where('id', 1)->get();

        return view('admin.generalSettings.generalSettings', ['form' => $generalSetting->get(0)]);
    }

    public function create()
    {
        GeneralSetting::updateOrCreate(['id' => 1], AdminRequest::capture()->all());

        return redirect()->back();
    }
}
