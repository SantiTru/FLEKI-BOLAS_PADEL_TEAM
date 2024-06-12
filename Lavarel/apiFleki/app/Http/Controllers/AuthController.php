<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Registro de un nuevo usuario.
     */
    public function registro(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:User',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // Crear un nuevo usuario
            $user = User::create([
                'nombre_usuario' => $request->input('nombre_usuario'),
                'apellidos' => $request->input('apellidos'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

            // Retornar el token de autenticación y la información del usuario
            return response()->json([
                'token' => $user->createToken('token')->plainTextToken,
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            \Log::error('Error al registrar el usuario: ' . $e->getMessage());
            return response()->json(['error' => 'Error al registrar el usuario'], 500);
        }
    }

    /**
     * Cierre de sesión.
     */
    public function logout(Request $request)
    {
        $user = $request->user(); // Accede al usuario autenticado actualmente

        // Elimina todos los tokens asociados con el usuario
        $user->tokens()->delete();

        return response()->json([
            'message' => 'Cierre de sesión exitoso'
        ]);
    }

    /**
     * Inicio de sesión.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Credenciales inválidas'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => '¡Hola, ' . $user->nombre_usuario . '!',
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }
}
