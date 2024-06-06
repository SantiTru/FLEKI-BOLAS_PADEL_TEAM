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
            'nombre_tipo' => 'Clase de Padel',
            'descripcion_tipo' => 'Clase de padel para principiantes',
            'precio' => 20.00,
        ];

        $response = $this->postJson('/api/tipos-servicio', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tipo_servicios', ['nombre_tipo' => 'Clase de Padel']);
    }

    /** @test */
    public function puede_obtener_un_tipo_servicio()
    {
        $tipoServicio = TipoServicio::factory()->create();

        $response = $this->getJson("/api/tipos-servicio/{$tipoServicio->id_tipo_servicio}");

        $response->assertStatus(200);
        $response->assertJson($tipoServicio->toArray());
    }

    /** @test */
    public function puede_actualizar_un_tipo_servicio()
    {
        $tipoServicio = TipoServicio::factory()->create();

        $data = [
            'nombre_tipo' => 'Clase avanzada de Padel',
            'descripcion_tipo' => 'Clase avanzada para jugadores intermedios',
            'precio' => 25.00,
        ];

        $response = $this->putJson("/api/tipos-servicio/{$tipoServicio->id_tipo_servicio}", $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('tipo_servicios', ['nombre_tipo' => 'Clase avanzada de Padel']);
    }

    /** @test */
    public function puede_eliminar_un_tipo_servicio()
    {
        $tipoServicio = TipoServicio::factory()->create();

        $response = $this->deleteJson("/api/tipos-servicio/{$tipoServicio->id_tipo_servicio}");

        $response->assertStatus(204);
        $this->assertDeleted($tipoServicio);
    }
}