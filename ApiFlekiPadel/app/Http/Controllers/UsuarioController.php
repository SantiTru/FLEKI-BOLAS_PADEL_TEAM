<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required',
            'apellidos' => 'required',
            'mail' => 'required|email|unique:usuarios,mail',
            'contraseña' => 'required|min:6',
        ]);

        $usuario = Usuario::create($request->all());

        return response()->json($usuario, 201);
    }

    public function show(Usuario $usuario)
    {
        return response()->json($usuario);
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre_usuario' => 'required',
            'apellidos' => 'required',
            'mail' => 'required|email|unique:usuarios,mail,' . $usuario->id_usuario,
            'contraseña' => 'required|min:6',
        ]);

        $usuario->update($request->all());

        return response()->json($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return response()->json(null, 204);
    }
}
