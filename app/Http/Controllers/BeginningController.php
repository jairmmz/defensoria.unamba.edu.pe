<?php

namespace App\Http\Controllers;

use App\Models\Beginning;
use Illuminate\Http\Request;

class BeginningController extends Controller
{
    public function index()
    {
        $beginnings = Beginning::all();
        return view('backend.pages.beginnings.index-beginnings', compact('beginnings'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Beginning $beginning)
    {
        //
    }

    public function edit(Beginning $beginning)
    {
        //
    }

    public function update(Request $request, Beginning $beginning)
    {
        //
    }

    public function destroy(Beginning $beginning)
    {
        //
    }
}
