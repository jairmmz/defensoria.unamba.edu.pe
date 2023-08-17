<?php

namespace App\Http\Controllers;

use App\Models\Authoritie;
use App\Models\GeneralSetting;

class ProcedureController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();
        $authoritie = Authoritie::first();

        return view('frontend.pages.procedures.index-procedures', compact('setting', 'authoritie'));
    }
}
