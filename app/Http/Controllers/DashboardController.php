<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;

class DashboardController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();
        
        return view('backend.index', compact('setting'));
    }
}
