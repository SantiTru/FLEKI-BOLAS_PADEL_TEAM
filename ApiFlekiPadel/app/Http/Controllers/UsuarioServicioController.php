<?php

namespace App\Http\Controllers;

use App\Models\UsuarioServicio;
use Illuminate\Http\Request;

class UsuarioServicioController extends Controller
{
    public function index()
    {
        return UsuarioServicio::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:Usuario,id_usuario',
            'id_servicio' => 'required|exists:servicio,id_servicio',
            'fecha_contratacion' => 'required|date',
        ]);

        $usuarioServicio = UsuarioServicio::create($request->all());

        return response()->json($usuarioServicio, 201);
    }

    public function show(UsuarioServicio $usuarioServicio)
    {
        return response()->json($usuarioServicio);
    }

    public function update(Request $request, UsuarioServicio $usuarioServicio)
    {
        $request->validate([
            'id_usuario' => 'required|exists:Usuario,id_usuario',
            'id_servicio' => 'required|exists:servicio,id_servicio',
            'fecha_contratacion' => 'required|date',
        ]);

        $usuarioServicio->update($request->all());

        return response()->json($usuarioServicio);
    }

    public function destroy(UsuarioServicio $usuarioServicio)
    {
        $usuarioServicio->delete();

        return response()->json(null, 204);
    }
}