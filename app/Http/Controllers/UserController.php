<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::all();

            return view('backend.pages.users.index-users', compact('users'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        return view('backend.pages.samples.register');
    }

    public function store(UserRequest $request)
    {
        try {
            $user = $request->all();

            if ($image = $request->file('profile_photo')) {
                $routeSaveImage = 'assets/images/';
                $imageUser = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($routeSaveImage, $imageUser);
                $user['profile_photo'] = "$imageUser";
            }

            User::create($user);

            return to_route('users')->with(['status' => 'success', 'message' => 'Usuario registrado correctamente.']);
        } catch (\Exception $th) {
            throw $th;
        }
    }

    public function show(User $user)
    {
    }

    public function edit(User $user)
    {
        return view('backend.pages.users.edit-user', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {
            $userUpdate = $request->all();

            if ($image = $request->file('profile_photo')) {
                // Eliminar la imagen de perfil anterior si existe
                if ($user->profile_photo) {
                    $imagePath = public_path('assets/images/') . $user->profile_photo;

                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }

                // Guardar la nueva imagen de perfil
                $routeSaveImage = 'assets/images/';
                $imageUser = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($routeSaveImage, $imageUser);
                $userUpdate['profile_photo'] = $imageUser;
            } else {
                // Mantener la imagen de perfil anterior si no se seleccionó una nueva imagen
                unset($userUpdate['profile_photo']);
            }

            // Verificar si se proporcionó una nueva contraseña
            if (empty($userUpdate['password'])) {
                unset($userUpdate['password']); // Eliminar el campo password del arreglo
            }

            $user->update($userUpdate);

            return redirect()->route('users')->with('success', 'Usuario actualizado correctamente.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(User $user)
    {
        try {
            if ($user->profile_photo) {
                $imagePath = public_path('assets/images/') . $user->profile_photo;

                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $user->delete();

            return to_route('users');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
