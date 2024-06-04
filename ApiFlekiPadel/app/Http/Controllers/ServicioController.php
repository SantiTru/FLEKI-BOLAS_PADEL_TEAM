<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicioRequest;
use App\Http\Resources\ServicioResource;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        return ServicioResource::collection(Servicio::with('tipoServicio')->get());
    }

    public function store(ServicioRequest $request)
    {
        $servicio = Servicio::create($request->validated());
        return new ServicioResource($servicio);
    }

    public function show(Servicio $servicio)
    {
        return new ServicioResource($servicio->load('tipoServicio'));
    }

    public function update(ServicioRequest $request, Servicio $servicio)
    {
        $servicio->update($request->validated());
        return new ServicioResource($servicio->load('tipoServicio'));
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return response()->json(null, 204);
    }
}
