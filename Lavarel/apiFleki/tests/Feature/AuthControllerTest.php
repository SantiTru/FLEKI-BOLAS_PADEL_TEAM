<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_registrar_un_usuario()
    {
        $response = $this->postJson('/api/register', [
            'nombre_usuario' => 'Usuario de Prueba',
            'apellidos' => 'Apellido de Prueba',
            'email' => 'prueba@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('User', ['email' => 'prueba@example.com']);
    }

    /** @test */
    public function puede_iniciar_sesion_un_usuario()
    {
        $user = User::factory()->create([
            'email' => 'prueba@example.com',
            'password' => Hash::make('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'prueba@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(['token']);
    }

    /** @test */
    public function rechaza_credenciales_invalidas()
    {
        $user = User::factory()->create([
            'email' => 'prueba@example.com',
            'password' => Hash::make('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'prueba@example.com',
            'password' => 'contrasena_incorrecta',
        ]);

        $response->assertStatus(401);
    }

    /** @test */
    public function puede_cerrar_sesion_un_usuario()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->postJson('/api/logout');

        $response->assertStatus(204);
    }
}