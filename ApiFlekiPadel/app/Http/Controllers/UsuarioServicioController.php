<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioServicioRequest;
use App\Http\Resources\UsuarioServicioResource;
use App\Models\UsuarioServicio;
use Illuminate\Http\Request;

class UsuarioServicioController extends Controller
{
    public function index()
    {
        return UsuarioServicioResource::collection(UsuarioServicio::with(['usuario', 'servicio'])->get());
    }

    public function store(UsuarioServicioRequest $request)
    {
        $usuarioServicio = UsuarioServicio::create($request->validated());
        return new UsuarioServicioResource($usuarioServicio);
    }

    public function show(UsuarioServicio $usuarioServicio)
    {
        return new UsuarioServicioResource($usuarioServicio->load(['usuario', 'servicio']));
    }

    public function update(UsuarioServicioRequest $request, UsuarioServicio $usuarioServicio)
    {
        $usuarioServicio->update($request->validated());
        return new UsuarioServicioResource($usuarioServicio->load(['usuario', 'servicio']));
    }

    public function destroy(UsuarioServicio $usuarioServicio)
    {
        $usuarioServicio->delete();
        return response()->json(null, 204);
    }
}
