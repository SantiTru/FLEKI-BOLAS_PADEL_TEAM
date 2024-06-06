<?php

namespace Tests\Feature;

use App\Models\Servicio;
use App\Models\TipoServicio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServicioTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_crear_un_servicio()
    {
        $tipoServicio = TipoServicio::factory()->create();

        $data = [
            'fecha_evento' => '2024-06-06',
            'id_tipo_servicio' => $tipoServicio->id_tipo_servicio,
        ];

        $response = $this->postJson('/api/servicios', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('servicios', ['fecha_evento' => '2024-06-06']);
    }

    /** @test */
    public function puede_obtener_un_servicio()
    {
        $servicio = Servicio::factory()->create();

        $response = $this->getJson("/api/servicios/{$servicio->id_servicio}");

        $response->assertStatus(200);
        $response->assertJson($servicio->toArray());
    }

    /** @test */
    public function puede_actualizar_un_servicio()
    {
        $servicio = Servicio::factory()->create();

        $data = [
            'fecha_evento' => '2024-07-01',
            'id_tipo_servicio' => $servicio->id_tipo_servicio,
        ];

        $response = $this->putJson("/api/servicios/{$servicio->id_servicio}", $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('servicios', ['fecha_evento' => '2024-07-01']);
    }

    /** @test */
    public function puede_eliminar_un_servicio()
    {
        $servicio = Servicio::factory()->create();

        $response = $this->deleteJson("/api/servicios/{$servicio->id_servicio}");

        $response->assertStatus(204);
        $this->assertDeleted($servicio);
    }
}