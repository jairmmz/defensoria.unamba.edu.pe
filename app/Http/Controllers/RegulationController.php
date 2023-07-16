<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index()
    {
        $regulations = Regulation::all();
        return view('backend.pages.regulations.index-regulations', compact('regulations'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Regulation $regulation)
    {
        //
    }

    public function edit(Regulation $regulation)
    {
        //
    }

    public function update(Request $request, Regulation $regulation)
    {
        //
    }

    public function destroy(Regulation $regulation)
    {
        //
    }
}
