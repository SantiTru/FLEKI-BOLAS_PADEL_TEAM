<?php

namespace App\Http\Controllers;

use App\Models\UsuarioServicio;
use App\Http\Requests\UsuarioServicioRequest;
use App\Http\Resources\UsuarioServicioResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioServicioController extends Controller
{
    public function index()
    {
        return UsuarioServicioResource::collection(UsuarioServicio::with(['user', 'servicios.tipoServicio'])->get());
    }

    public function store(UsuarioServicioRequest $request)
    {
        $usuarioServicio = UsuarioServicio::create($request->validated());
        return new UsuarioServicioResource($usuarioServicio);
    }

    public function show(UsuarioServicio $usuarioServicio)
    {
        return new UsuarioServicioResource($usuarioServicio->load(['user', 'servicios.tipoServicio']));
    }

    public function update(UsuarioServicioRequest $request, UsuarioServicio $usuarioServicio)
    {
        $usuarioServicio->update($request->validated());
        return new UsuarioServicioResource($usuarioServicio->load(['user', 'servicios.tipoServicio']));
    }

    public function destroy(UsuarioServicio $usuarioServicio)
    {
        $usuarioServicio->delete();
        return response()->noContent();
    }

public function serviciosPorUsuario()
{
    $user = Auth::user();

    if (!$user) {
        return response()->json(['error' => 'Usuario no autenticado'], 401);
    }

    $usuarioServicios = UsuarioServicio::with(['servicios.tipoServicio'])
                        ->where('id_usuario', $user->id)
                        ->get();

    return UsuarioServicioResource::collection($usuarioServicios);
}
}