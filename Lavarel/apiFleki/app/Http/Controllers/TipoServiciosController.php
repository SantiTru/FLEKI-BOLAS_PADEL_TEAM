<?php

namespace App\Http\Controllers;

use App\Models\TipoServicios;
use App\Http\Requests\TipoServiciosRequest;
use App\Http\Resources\TipoServiciosResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TipoServiciosController extends Controller
{
    public function index()
    {
        return TipoServiciosResource::collection(TipoServicios::all());
    }

    public function store(TipoServiciosRequest $request)
    {
        $tipoServicios = TipoServicios::create($request->validated());
        return new TipoServiciosResource($tipoServicios);
    }

    public function show(TipoServicios $tipoServicios)
    {
        return new TipoServiciosResource($tipoServicios);
    }

    public function update(TipoServiciosRequest $request, TipoServicios $tipoServicios)
    {
        try {
            $tipoServicios->update($request->validated());
            $tipoServicios->refresh(); 

            return new TipoServiciosResource($tipoServicios);
        } catch (\Exception $e) {
            Log::error('Error al actualizar TipoServicios: ' . $e->getMessage());
            return response()->json(['error' => 'Error al actualizar el tipo de servicio'], 500);
        }
    }

    public function destroy(TipoServicios $tipoServicios)
    {
        try {
            $tipoServicios->delete();
            return response()->noContent();
        } catch (\Exception $e) {
            Log::error('Error al eliminar TipoServicios: ' . $e->getMessage());
            return response()->json(['error' => 'Error al eliminar el tipo de servicio'], 500);
        }
    }
}