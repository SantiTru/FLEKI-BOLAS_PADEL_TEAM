<?php

namespace Tests\Feature;

use App\Models\TipoServicio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TipoServicioTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_crear_un_tipo_servicio()
    {
        $data = [
            'nombre_tipo' => 'Clase de Padel Intermedia',
            'descripcion_tipo' => 'Clase para nivel intermedio.',
            'precio' => 40.00,
        ];

        $response = $this->postJson('/api/tipos-servicio', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tipo_servicio', ['nombre_tipo' => 'Clase de Padel Intermedia']);
    }

    /** @test */
    public function puede_obtener_un_tipo_servicio()
    {
        $tipoServicio = TipoServicio::factory()->create();

        $response = $this->getJson("/api/tipos-servicio/{$tipoServicio->id_tipo_servicio}");

        $response->assertStatus(200);
        $response->assertJson([
            'data' => [
                'id_tipo_servicio' => $tipoServicio->id_tipo_servicio,
                'nombre_tipo' => $tipoServicio->nombre_tipo,
                'descripcion_tipo' => $tipoServicio->descripcion_tipo,
                'precio' => $tipoServicio->precio,
            ]
        ]);
    }

    /** @test */
    public function puede_actualizar_un_tipo_servicio()
    {
        $tipoServicio = TipoServicio::factory()->create();
    
        $data = [
            'nombre_tipo' => 'Clase avanzada de Padel',
            'descripcion_tipo' => 'Clase para jugadores avanzados.',
            'precio' => 60.00,
        ];
    
        $response = $this->putJson("/api/tipos-servicio/{$tipoServicio->id_tipo_servicio}", $data);
    
        $response->assertStatus(200);
        $this->assertDatabaseHas('tipo_servicio', ['nombre_tipo' => 'Clase avanzada de Padel']);
    }

    /** @test */
    public function puede_eliminar_un_tipo_servicio()
    {
        $tipoServicio = TipoServicio::factory()->create();
    
        $response = $this->deleteJson("/api/tipos-servicio/{$tipoServicio->id_tipo_servicio}");
    
        $response->assertStatus(204);
        $this->assertDatabaseMissing('tipo_servicio', ['id_tipo_servicio' => $tipoServicio->id_tipo_servicio]);
    }
}