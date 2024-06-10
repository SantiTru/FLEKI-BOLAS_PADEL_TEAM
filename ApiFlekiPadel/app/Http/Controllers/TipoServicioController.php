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

    public function show($id)
    {
        $tipoServicio = TipoServicio::findOrFail($id);

        return response()->json([
            'data' => $tipoServicio
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $tipoServicio = TipoServicio::findOrFail($id);
    
        $tipoServicio->update($request->all());
    
        return response()->json([
            'data' => $tipoServicio
        ], 200);
    }

    public function destroy($id)
    {
        $tipoServicio = TipoServicio::findOrFail($id);
        $tipoServicio->delete();
    
        return response()->json(null, 204);
    }
}