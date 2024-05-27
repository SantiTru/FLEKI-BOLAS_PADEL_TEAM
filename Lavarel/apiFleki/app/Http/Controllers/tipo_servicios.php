<?php


namespace App\Http\Controllers;


use App\Models\tipo_servicios;


use App\Http\Requests\tipo_serviciosRequest;
use App\Http\Resources\tipo_serviciosResource;


use Illuminate\Http\Resources\Json\JsonResource;


class tipo_serviciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $tipo_servicioss = tipo_servicios::all();
        // return response()->json($productos,200);
        return tipo_serviciosResource::collection($tipo_servicioss);
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
    public function store(tipo_serviciosRequest $request)
    {
        $etiquetas = $request->labels;
        $params = $request->all();
        unset($params["tipo_servicios"]);
        $tipo_servicios = tipo_servicios::create($params);
        $tipo_servicios->labels()->attach($etiquetas);
       
        return response()->json($tipo_servicios, 201);


    }


    /**
     * Display the specified resource.
     */
    public function show($id): JsonResource
    {
        $tipo_servicios = tipo_servicios::find($id);
        // return response()->json($producto,200);


        return new tipo_serviciosResource($tipo_servicios);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipo_servicios $tipo_servicios)
    {


    }


    /**
     * Update the specified resource in storage.
     */
    public function update(tipo_serviciosRequest $request, $id)
{
    $tipo_servicios = tipo_servicios::findOrFail($id);
    $tipo_servicios->labels()->detach();
    $tipo_servicios->titulo = $request->titulo;
    $tipo_servicios->descripcion = $request->descripcion;
    $tipo_servicios->save();
    $tipo_servicios->labels()->attach($request->labels);
    return new tipo_serviciosResource($tipo_servicios);
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tipo_servicios $tipo_servicios)
    {
        $tipo_servicios->labels()->detach();
        $tipo_servicios->delete();
        return response()->json($tipo_servicios, 200);
    }
}


