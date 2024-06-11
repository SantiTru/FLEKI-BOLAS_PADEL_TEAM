<?php

namespace App\Http\Controllers;

use App\Models\TipoServicios;
use App\Http\Requests\TipoServiciosRequest;
use App\Http\Resources\TipoServiciosResource;
use Illuminate\Http\Request;

class TipoServiciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

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
        $tipoServicios->update($request->validated());
        return new TipoServiciosResource($tipoServicios);
    }

    public function destroy(TipoServicios $tipoServicios)
    {
        $tipoServicios->delete();
        return response()->noContent();
    }
}