<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;

class ProcedureController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();

        return view('frontend.pages.procedures.index-procedures', compact('setting'));
    }
}
