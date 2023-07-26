<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();

        return view('frontend.pages.services.index-services', compact('setting'));
    }
}
