<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\News;
use App\Models\Regulation;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();

        $users = User::all()->count();
        $news = News::all()->count();
        $regulations = Regulation::all()->count();
        
        return view('backend.index', compact('setting', 'users', 'news', 'regulations'));
    }
}
