<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Http\Requests\ServiciosRequest;
use App\Http\Resources\ServiciosResource;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return ServiciosResource::collection(Servicios::with('tipoServicio')->get());
    }

    public function store(ServiciosRequest $request)
    {
        $servicios = Servicios::create($request->validated());
        return new ServiciosResource($servicios);
    }

    public function show(Servicios $servicios)
    {
        return new ServiciosResource($servicios->load('tipoServicio'));
    }

    public function update(ServiciosRequest $request, Servicios $servicios)
    {
        $servicios->update($request->validated());
        return new ServiciosResource($servicios->load('tipoServicio'));
    }

    public function destroy(Servicios $servicios)
    {
        $servicios->delete();
        return response()->noContent();
    }
}