<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;  // Agrega esta línea para importar la clase User
use Illuminate\Support\Facades\Hash;  // Agrega esta línea para importar la fachada Hash

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'administrador',
            'email' => 'administrador@gmail.com',
            'address' => 'Av. siempre viva',
            'phone' => '0999999999',
            'password' => Hash::make("12345678"),
        ]);
    
        User::create([
            'name' => 'doctoruno',
            'email' => 'doctoruno@gmail.com',
            'address' => 'Av. siempre viva',
            'phone' => '0999999999',
            'password' => Hash::make("12345678"),
        ]);
    
        User::create([
            'name' => 'pacienteuno',
            'email' => 'pacienteuno@gmail.com',
            'address' => 'Av. siempre viva',
            'phone' => '0999999999',
            'password' => Hash::make("12345678"),
        ]);
    
        User::factory(17)->create();
    }
}
