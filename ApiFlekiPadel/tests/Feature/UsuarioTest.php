<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_crear_un_usuario()
    {
        $data = [
            'nombre_usuario' => 'Juan',
            'apellidos' => 'Perez',
            'mail' => 'juan.perez@example.com',
            'contraseña' => 'password123',
        ];

        $response = $this->postJson('/api/usuarios', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('usuario', ['mail' => 'juan.perez@example.com']);
    }

    /** @test */
    public function puede_obtener_un_usuario()
    {
        $usuario = Usuario::factory()->create();

        $response = $this->getJson("/api/usuarios/{$usuario->id_usuario}");

        $response->assertStatus(200);
        $response->assertJson($usuario->toArray());
    }

    /** @test */
    public function puede_actualizar_un_usuario()
    {
        $usuario = Usuario::factory()->create();

        $data = [
            'nombre_usuario' => 'Carlos',
            'apellidos' => 'Martinez',
            'mail' => 'carlos.martinez@example.com',
            'contraseña' => 'password123',
        ];

        $response = $this->putJson("/api/usuarios/{$usuario->id_usuario}", $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('usuario', ['nombre_usuario' => 'Carlos']);
    }

    /** @test */
    public function puede_eliminar_un_usuario()
    {
        $usuario = Usuario::factory()->create();

        $response = $this->deleteJson("/api/usuarios/{$usuario->id_usuario}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('usuario', ['id_usuario' => $usuario->id_usuario]);
    }
}
