<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstacaoSeeder extends Seeder
{
    public function run()
    {
        DB::table('estacao')->insert([
            [
                'nome' => 'Estação Tech Sol e Mar',
                'horario' => '08:00 - 18:00',
                'contato' => 'solmar@contato.com',
                'status' => true,
                'endereco_id' => 1, 
                'gestor_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Estação Tech Nova Vida',
                'horario' => '09:00 - 17:00',
                'contato' => 'novavida@contato.com',
                'status' => true,
                'endereco_id' => 2, 
                'gestor_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Estação Tech Itapera',
                'horario' => '10:00 - 16:00',
                'contato' => 'itapera@contato.com',
                'status' => true,
                'endereco_id' => 3, 
                'gestor_id' => 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Estação Tech Maracanã',
                'horario' => '07:00 - 19:00',
                'contato' => 'maracana@contato.com',
                'status' => true,
                'endereco_id' => 4, 
                'gestor_id' => 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Estação Tech Vila São José II',
                'horario' => '08:00 - 18:00',
                'contato' => 'vilasaojose@contato.com',
                'status' => true,
                'endereco_id' => 5, 
                'gestor_id' => 5, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Estação Tech Forquilha',
                'horario' => '08:00 - 18:00',
                'contato' => 'forquilha@contato.com',
                'status' => false,
                'endereco_id' => 6, 
                'gestor_id' => 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
