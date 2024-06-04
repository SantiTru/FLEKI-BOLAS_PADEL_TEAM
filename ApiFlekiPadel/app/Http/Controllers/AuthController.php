<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    use HasApiTokens;

    // Registro de usuario
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre_usuario' => 'required|string|max:255',
            'Apellidos' => 'required|string|max:255',
            'Mail' => 'required|string|email|max:255|unique:usuario',
            'Contraseña' => 'required|string|min:8',
        ]);

        $validatedData['Contraseña'] = Hash::make($validatedData['Contraseña']);

        $user = Usuario::create($validatedData);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // Inicio de sesión de usuario
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('Mail', 'Contraseña'))) {
            return response()->json(['message' => 'Datos incorrectos'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // Detalles del usuario autenticado
    public function me(Request $request)
    {
        return $request->user();
    }

    // Cerrar sesión del usuario
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Sesión cerrada']);
    }
}