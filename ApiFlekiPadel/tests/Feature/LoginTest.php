<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_registrar_un_usuario()
    {
        $response = $this->postJson('/api/register', [
            'nombre_usuario' => 'Usuario de Prueba',
            'apellidos' => 'Apellido de Prueba',
            'mail' => 'prueba@example.com',
            'contraseña' => 'password',
            'contraseña_confirmation' => 'password',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('Usuario', ['mail' => 'prueba@example.com']);
    }

    /** @test */
    public function puede_iniciar_sesion_un_usuario()
    {
        $user = Usuario::factory()->create([
            'mail' => 'prueba@example.com',
            'contraseña' => Hash::make('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'mail' => 'prueba@example.com',
            'contraseña' => 'password',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(['token']);
    }

    /** @test */
    public function rechaza_credenciales_invalidas()
    {
        $user = Usuario::factory()->create([
            'mail' => 'prueba@example.com',
            'contraseña' => Hash::make('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'mail' => 'prueba@example.com',
            'contraseña' => 'contrasena_incorrecta',
        ]);

        $response->assertStatus(401);
    }

    /** @test */
    public function puede_cerrar_sesion_un_usuario()
    {
        $user = Usuario::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->postJson('/api/logout');

        $response->assertStatus(204);
    }
}