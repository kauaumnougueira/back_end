<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GestorSeeder extends Seeder
{
    public function run()
    {
        DB::table('gestor')->insert([
            [
                'nome' => 'João Silva',
                'email' => 'joao.silva@example.com',
                'telefone' => '(98) 99999-9999',
                'cpf' => '123.456.789-00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Oliveira',
                'email' => 'maria.oliveira@example.com',
                'telefone' => '(98) 98888-8888',
                'cpf' => '987.654.321-00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carlos Santos',
                'email' => 'carlos.santos@example.com',
                'telefone' => '(98) 97777-7777',
                'cpf' => '456.789.123-00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Ana Souza',
                'email' => 'ana.souza@example.com',
                'telefone' => '(98) 96666-6666',
                'cpf' => '321.654.987-00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Roberto Lima',
                'email' => 'roberto.lima@example.com',
                'telefone' => '(98) 95555-5555',
                'cpf' => '789.123.456-00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
