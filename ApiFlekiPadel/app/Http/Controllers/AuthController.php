<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'mail' => 'required|string|email|max:255|unique:Usuario,mail',
            'contraseña' => 'required|string|min:8|confirmed',
        ]);

        $user = Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'apellidos' => $request->apellidos,
            'mail' => $request->mail,
            'contraseña' => bcrypt($request->contraseña),
        ]);

        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'mail' => 'required|string|email',
            'contraseña' => 'required|string',
        ]);

        $user = Usuario::where('mail', $request->mail)->first();

        if (! $user || ! Hash::check($request->contraseña, $user->contraseña)) {
            return response()->json(['error' => 'Las credenciales proporcionadas son incorrectas.'], 401);
        }

        return response()->json([
            'token' => $user->createToken($request->device_name ?? 'default')->plainTextToken,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([], 204);
    }
}