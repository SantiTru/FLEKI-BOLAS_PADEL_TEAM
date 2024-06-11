<?php

namespace App\Http\Controllers;

use App\Models\UsuarioServicio;
use App\Http\Requests\UsuarioServicioRequest;
use App\Http\Resources\UsuarioServicioResource;
use Illuminate\Http\Request;

class UsuarioServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return UsuarioServicioResource::collection(UsuarioServicio::with(['user', 'servicio'])->get());
    }

    public function store(UsuarioServicioRequest $request)
    {
        $usuarioServicio = UsuarioServicio::create($request->validated());
        return new UsuarioServicioResource($usuarioServicio);
    }

    public function show(UsuarioServicio $usuarioServicio)
    {
        return new UsuarioServicioResource($usuarioServicio->load(['user', 'servicio']));
    }

    public function update(UsuarioServicioRequest $request, UsuarioServicio $usuarioServicio)
    {
        $usuarioServicio->update($request->validated());
        return new UsuarioServicioResource($usuarioServicio->load(['user', 'servicio']));
    }

    public function destroy(UsuarioServicio $usuarioServicio)
    {
        $usuarioServicio->delete();
        return response()->noContent();
    }
}