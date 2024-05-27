<?php


namespace App\Http\Controllers;


use App\Models\servicios;


use App\Http\Requests\serviciosRequestRequest;
use App\Http\Resources\serviciosResourceResource;


use Illuminate\Http\Resources\Json\JsonResource;




class serviciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $servicios = servicios::all();


        return serviciosResource::collection($servicios);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
    ]);


    $label = servicios::create($validatedData);


    return response()->json(['data' => $label], 201);
}




    /**
     * Display the specified resource.
     */


    public function show($id):JsonResource


    {
        $servicios = servicios::find($id);
     


return new serviciosResource($servicios);
    }


   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servicios $servicios)
    {
       
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(serviciosRequest $request, $id): JsonResource
    {
        try {
            $servicios = servicios::find($id);
   
            if (!$servicios) {
                return response()->json(['error' => 'La servicios no se encontró'], 404);
            }
   
            $servicios->update($request->all());
   
            return new serviciosResource($servicios);
        } catch (\Exception $e) {
            return response()->json(['message' => 'No se pudo actualizar', 'error' => $e->getMessage()], 500);
        }
    }

    public function enroll(Request $request, $id) {
        $servicio = Servicio::findOrFail($id);
        $request->user()->servicios()->attach($servicio);
        return redirect()->route('servicios.index')->with('success', 'Inscrito con éxito');
    }
    
    public function myServices(Request $request) {
        $servicios = $request->user()->servicios;
        return view('servicios.my_services', compact('servicios'));
    }
    
   




    public function destroy($id)
    {
        $label = servicios::findOrFail($id);
        // Desvincula todas las relaciones de las tareas antes de eliminar la etiqueta
        $label->tasks()->detach();
        $label->delete();
        return response()->json(['message' => 'Servicio eliminado correctamente'], 200);
    }
}
