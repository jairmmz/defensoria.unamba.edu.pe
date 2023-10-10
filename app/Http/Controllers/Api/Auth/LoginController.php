<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $baseController;

    public function __construct(BaseController $baseController)
    {
        $this->baseController = $baseController;
    }

    public function login(Request $request): JsonResponse
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email|string|exists:users,email',
                'password' => [
                    'required',
                ],
                'remember' => 'boolean'
            ]);
            $remember = $credentials['remember'] ?? false;
            unset($credentials['remember']);

            if (!Auth::attempt($credentials, $remember)) {
                return $this->baseController->sendError('Error', 'Credenciales incorrectas.');
            }

            /** @var User $user */
            $user = Auth::user();
            $token = $user->createToken('token_access')->plainTextToken;

            return $this->baseController->sendResponse(['user' => $user, 'token' => $token], 'Sesión iniciada correctamente');
        } catch (Exception $e) {
            return $this->baseController->sendError('Error', $e->getMessage());
        }
    }
}
