<?php

namespace App\Http\Controllers;

use App\Models\Authoritie;
use Illuminate\Http\Request;

class AuthoritieController extends Controller
{
    public function index()
    {
        $authorities = Authoritie::all();
        return view('backend.pages.authorities.index-authoritie', compact('authorities'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Authoritie $authoritie)
    {
        // $authoritie = Authoritie::create($request->validated());

        $authoritie = new Authoritie();
        $authoritie->charge_authority = $request->charge_authority;
        $authoritie->name = $request->name;
        
        // Save image
        $path = public_path() . '/images/authorities';
        !is_dir($path) && mkdir($path, 0777, true);

        $imageName = time() . '.' . $request->image_authority->extension();
        $request->image_authority->move($path, $imageName);

        $authoritie->image_authority = $imageName;

        $authoritie->id_user = $request->id_user;

        $authoritie->save();

        $data = [
            'status' => 200,
            'message' => 'Success',
            'data' => $authoritie
        ];

        return response()->json($data, 200);
    }

    public function show(Authoritie $authoritie)
    {
        $data = [
            'status' => 200,
            'message' => 'Success',
            'data' => $authoritie
        ];

        return response()->json($data, 200);
    }

    public function edit(Authoritie $authoritie)
    {
        //
    }

    public function update(Request $request, Authoritie $authoritie)
    {
        //
    }

    public function destroy(Authoritie $authoritie)
    {
        //
    }
}
