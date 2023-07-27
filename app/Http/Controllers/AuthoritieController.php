<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthoritieRequest;
use App\Models\Authoritie;
use App\Models\GeneralSetting;

class AuthoritieController extends Controller
{
    public function index()
    {
        $authoritie = Authoritie::first();
        $setting = GeneralSetting::first();

        return view('backend.pages.authorities.index-authoritie', compact('authoritie', 'setting'));
    }

    public function update(AuthoritieRequest $request)
    {
        try {
            $authoritie = Authoritie::first();
            
            if (!$authoritie) {
                // Si no existe un registro, puedes mostrar un mensaje de error o redireccionar a otra página
                return redirect()->route('authorities')->with('error', 'No se encontró la autoridad');
            }
    
            $authoritieUpdate = $request->all();
    
            if ($image = $request->file('image_authority')) {
                if ($authoritie->image_authority) {
                    $imagePath = public_path('assets/images/' . $authoritie->image_authority);
    
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
    
                $routeSaveImage = 'assets/images/';
                $imageUser = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($routeSaveImage, $imageUser);
                $authoritieUpdate['image_authority'] = $imageUser;
            } else {
                $authoritieUpdate['image_authority'] = $authoritie->image_authority;
            }
    
            $authoritie->update($authoritieUpdate);
    
            return redirect()->route('authorities')->with('message', 'Operación realizada correctamente');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
}
