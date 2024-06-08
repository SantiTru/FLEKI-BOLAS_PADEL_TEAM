<?php

namespace App\Http\Controllers;

use App\Models\TipoServicio;
use Illuminate\Http\Request;
use App\Http\Resources\TipoServicioResource;

class TipoServicioController extends Controller
{
    public function index()
    {
        return TipoServicioResource::collection(TipoServicio::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_tipo' => 'required|string|max:255',
            'descripcion_tipo' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);

        $tipoServicio = TipoServicio::create($request->all());

        return new TipoServicioResource($tipoServicio);
    }

    public function show(TipoServicio $tipoServicio)
    {
        return new TipoServicioResource($tipoServicio);
    }

    public function update(Request $request, TipoServicio $tipoServicio)
    {
        $request->validate([
            'nombre_tipo' => 'required|string|max:255',
            'descripcion_tipo' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);

        $tipoServicio->update($request->all());

        return new TipoServicioResource($tipoServicio);
    }

    public function destroy(TipoServicio $tipoServicio)
    {
        $tipoServicio->delete();

        return response()->json(null, 204);
    }
}