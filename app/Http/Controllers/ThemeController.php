<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function setTheme(Request $request)
    {
        $theme = $request->input('theme'); // Recupera el tema seleccionado (light o dark)
        $cookie = cookie('theme', $theme); // Crea una cookie con el nombre 'theme' y el valor del tema seleccionado
    
        return redirect()->back()->cookie($cookie); // Redirecciona al usuario y adjunta la cookie
    }
}
