<?php


namespace App\Http\Controllers;


use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registro(Request $request)
    {
        try {
            // Crear un nuevo usuario
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password'))
            ]);
     
            $user->save();
            
            // Retornar el token de autenticación y la información del usuario
            return [
                'token' => $user->createToken('token')->plainTextToken,
                'user' => $user
            ];
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar el usuario'], 500);
        }
    }
    public function logout(Request $request)
    {
        $user = $request->user(); // Accede al usuario autenticado actualmente
        
        // Elimina todos los tokens asociados con el usuario
        $user->tokens()->delete();
    
        return response()->json([
            'message' => 'Cierre de sesión exitoso'
        ]);
    }


    public function login(Request $request)
{
    $user = User::where('email', $request->email)->firstOrFail();
    $token = $user->createToken('auth_token')->plainTextToken;
    return response()->json([
        'message' => '¡Hola, ' . $user->name . '!',
        'access_token' => $token,
        'token_type' => 'Bearer'
    ]);
}
}
