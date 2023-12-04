<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::factory()->create([
            'nome' => 'Admin',
            'email' => 'admin@admin.com.br',
            'senha' => md5('natural123456'),
            'status' => true
        ]);
    }
}
