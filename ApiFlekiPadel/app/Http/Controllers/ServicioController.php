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
        return Servicio::all();
    }

    public function store(ServicioRequest $request)
    {
        $servicio = Servicio::create($request->validated());

        return response()->json($servicio, 201);
    }

    public function show(Servicio $servicio)
    {
        return response()->json($servicio);
    }

    public function update(ServicioRequest $request, Servicio $servicio)
    {
        $servicio->update($request->validated());

        return response()->json($servicio);
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return response()->json(null, 204);
    }
}
