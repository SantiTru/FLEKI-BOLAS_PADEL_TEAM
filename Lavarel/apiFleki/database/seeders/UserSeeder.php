<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert user
        DB::table('User')->insert([
            [
                'nombre_usuario' => 'Santi',
                'apellidos' => 'Truji',
                'email' => 'Fleki.truji@padeltour.com', 
                'password' => Hash::make('password1'), 
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_usuario' => 'Cristi',
                'apellidos' => 'LaConde',
                'email' => 'Cris.Laconde@quebola.com', 
                'password' => Hash::make('password2'), 
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        $users = User::all();
        foreach ($users as $user) {
            $user->createToken('API Token')->plainTextToken;
        }
    }
}
