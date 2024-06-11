<?php


namespace App\Http\Controllers;


use App\Models\Servicio;


use App\Http\Requests\ServicioRequest;
use App\Http\Resources\ServicioResource;
use App\Models\Servicios;
use Illuminate\Http\Resources\Json\JsonResource;


class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $Servicios = Servicios::all();
        // return response()->json($productos,200);
        return ServicioResource::collection($Servicios);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicioRequest $request)
    {
        $etiquetas = $request->labels;
        $params = $request->all();
        unset($params["labels"]);
        $Servicio = Servicios::create($params);
        $Servicio->labels()->attach($etiquetas);
       
        return response()->json($Servicio, 201);


    }


    /**
     * Display the specified resource.
     */
    public function show($id): JsonResource
    {
        $Servicio = Servicios::find($id);
        // return response()->json($producto,200);


        return new ServicioResource($Servicio);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicios $Servicio)
    {


    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ServiciosRequest $request, $id)
{
    $Servicio = Servicios::findOrFail($id);
    $Servicio->labels()->detach();
    $Servicio->titulo = $request->titulo;
    $Servicio->descripcion = $request->descripcion;
    $Servicio->save();
    $Servicio->labels()->attach($request->labels);
    return new ServicioResource($Servicio);
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicios $Servicio)
    {
        $Servicio->labels()->detach();
        $Servicio->delete();
        return response()->json($Servicio, 200);
    }
}
