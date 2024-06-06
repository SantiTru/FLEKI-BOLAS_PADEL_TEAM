<?php

namespace Tests\Feature;

use App\Models\Usuario;
use App\Models\Servicio;
use App\Models\UsuarioServicio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsuarioServicioTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_crear_un_usuario_servicio()
    {
        $usuario = Usuario::factory()->create();
        $servicio = Servicio::factory()->create();

        $data = [
            'id_usuario' => $usuario->id_usuario,
            'id_servicio' => $servicio->id_servicio,
            'fecha_contratacion' => '2024-06-06',
        ];

        $response = $this->postJson('/api/usuario-servicios', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('usuario_servicios', ['fecha_contratacion' => '2024-06-06']);
    }

    /** @test */
    public function puede_obtener_un_usuario_servicio()
    {
        $usuarioServicio = UsuarioServicio::factory()->create();

        $response = $this->getJson("/api/usuario-servicios/{$usuarioServicio->id_usuario_servicio}");

        $response->assertStatus(200);
        $response->assertJson($usuarioServicio->toArray());
    }

    /** @test */
    public function puede_actualizar_un_usuario_servicio()
    {
        $usuarioServicio = UsuarioServicio::factory()->create();

        $data = [
            'fecha_contratacion' => '2024-07-01',
        ];

        $response = $this->putJson("/api/usuario-servicios/{$usuarioServicio->id_usuario_servicio}", $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('usuario_servicios', ['fecha_contratacion' => '2024-07-01']);
    }

    /** @test */
    public function puede_eliminar_un_usuario_servicio()
    {
        $usuarioServicio = UsuarioServicio::factory()->create();

        $response = $this->deleteJson("/api/usuario-servicios/{$usuarioServicio->id_usuario_servicio}");

        $response->assertStatus(204);
        $this->assertDeleted($usuarioServicio);
    }
}