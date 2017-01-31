<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class GeneralSettingsController extends Controller
{
    public function all()
    {
        return view('admin.generalSettings.generalSettings');
    }
}
