<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnderecoSeeder extends Seeder
{
    public function run()
    {
        DB::table('endereco')->insert([
            // São Luís
            [
                'cep' => '65066-620', 
                'bairro' => 'Sol e Mar',
                'logradouro' => 'Av. Mar e Sol',
                'cidade' => 'São Luís',
                'uf' => 'MA',
                'coordenada' => '-2.488206810940789, -44.21530265821267', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cep' => '00000-000', 
                'bairro' => 'Nova Vida',
                'logradouro' => 'Av. Edson Lobão - Res. Nova Vida - 09',
                'cidade' => 'São Luís',
                'uf' => 'MA',
                'coordenada' => '-2.6251333617418178, -44.1939184946158', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cep' => '00000-000', 
                'bairro' => 'Itapera',
                'logradouro' => 'Associação Bumba Meu Boi de Itapera, Rua Principal nº 2',
                'cidade' => 'São Luís',
                'uf' => 'MA',
                'coordenada' => '-2.673852850479548, -44.280128426492254', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cep' => '00000-000', 
                'bairro' => 'Maracanã',
                'logradouro' => 'Rua Evandro Bessa, Centro Cultural Bumba Meu Boi Maracanã',
                'cidade' => 'São Luís',
                'uf' => 'MA',
                'coordenada' => '-2.6339530885358755, -44.27928076164282', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Paço do Lumiar
            [
                'cep' => '65130-000', 
                'bairro' => 'Vila São José II',
                'logradouro' => 'Rua 05, Escola Comunitária São Vicente',
                'cidade' => 'Paço do Lumiar',
                'uf' => 'MA',
                'coordenada' => '-2.520613895880211, -44.169419693207004',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
