<?php

namespace App\Http\Controllers;

use App\Models\Authoritie;
use App\Models\GeneralSetting;

class IndexPageController extends Controller
{
    public function index()
    {

        $authoritie = Authoritie::first();
        $setting = GeneralSetting::first();
        
        return view('frontend.pages.index', compact('authoritie', 'setting'));
    }
}
