<?php


namespace App\Http\Controllers;


use App\Models\tipoServicios;


use App\Http\Requests\tipoServiciosRequest;
use App\Http\Resources\tipoServiciosResource;


use Illuminate\Http\Resources\Json\JsonResource;




class tipoServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $tipoServicioss = tipoServicios::all();


        return tipoServiciosResource::collection($tipoServicioss);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
    ]);


    $label = tipoServicios::create($validatedData);


    return response()->json(['data' => $label], 201);
}




    /**
     * Display the specified resource.
     */


    public function show($id):JsonResource


    {
        $tipoServicios = tipoServicios::find($id);
     


return new tipoServiciosResource($tipoServicios);
    }


   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipoServicios $tipoServicios)
    {
       
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(tipoServiciosRequest $request, $id): JsonResource
    {
        try {
            $tipoServicios = tipoServicios::find($id);
   
            if (!$tipoServicios) {
                return response()->json(['error' => 'La tipoServicios no se encontró'], 404);
            }
   
            $tipoServicios->update($request->all());
   
            return new tipoServiciosResource($tipoServicios);
        } catch (\Exception $e) {
            return response()->json(['message' => 'No se pudo actualizar', 'error' => $e->getMessage()], 500);
        }
    }
   




    public function destroy($id)
    {
        $label = tipoServicios::findOrFail($id);
        // Desvincula todas las relaciones de las tareas antes de eliminar la etiqueta
        $label->tasks()->detach();
        $label->delete();
        return response()->json(['message' => 'Etiqueta eliminada correctamente'], 200);
    }
}
