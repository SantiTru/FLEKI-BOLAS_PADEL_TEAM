<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoServicioRequest;
use App\Http\Resources\TipoServicioResource;
use App\Models\TipoServicio;
use Illuminate\Http\Request;

class TipoServicioController extends Controller
{
    public function index()
    {
        return TipoServicioResource::collection(TipoServicio::all());
    }

    public function store(TipoServicioRequest $request)
    {
        $tipoServicio = TipoServicio::create($request->validated());
        return new TipoServicioResource($tipoServicio);
    }

    public function show(TipoServicio $tipoServicio)
    {
        return new TipoServicioResource($tipoServicio);
    }

    public function update(TipoServicioRequest $request, TipoServicio $tipoServicio)
    {
        $tipoServicio->update($request->validated());
        return new TipoServicioResource($tipoServicio);
    }

    public function destroy(TipoServicio $tipoServicio)
    {
        $tipoServicio->delete();
        return response()->json(null, 204);
    }
}
