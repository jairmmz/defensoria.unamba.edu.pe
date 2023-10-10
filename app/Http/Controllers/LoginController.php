<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('backend.pages.samples.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function forgotPassword()
    {
        return view('backend.pages.samples.forgot-password');
    }

    public function forgotPasswordSend(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
        ]);

        if(Auth::attempt(['email' => $request->email])){
            $email = $request->email;
            return view('backend.pages.samples.forgot-password-send', compact('email'))->with(['status' => 'Se ha enviado un correo electrónico con un enlace para restablecer la contraseña si la dirección de correo electrónico coincide con un usuario registrado.']);
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
