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
        return UsuarioResource::collection(Usuario::all());
    }

    public function store(UsuarioRequest $request)
    {
        $data = $request->validated();
        $data['Contraseña'] = bcrypt($data['Contraseña']);
        $usuario = Usuario::create($data);
        return new UsuarioResource($usuario);
    }

    public function show(Usuario $usuario)
    {
        return new UsuarioResource($usuario);
    }

    public function update(UsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->validated());
        return new UsuarioResource($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(null, 204);
    }
}
