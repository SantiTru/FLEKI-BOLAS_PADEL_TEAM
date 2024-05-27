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
    public function register(Request $request)
    {
        $user = User::create([
            'name'=> $request->name,
            'apellidos' => $request->apellidos,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);


        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['data' => $user, 'acces_token'=> $token, 'token_type'=> 'Bearer']);
    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return ['message'=> 'Sesión cerrada correctamente'];
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
