<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    public function run()
    {
        DB::table('curso')->insert([
            [
                'nome' => 'Informática Básica',
                'descricao' => 'Curso básico para introdução ao uso de computadores e software.',
                'professor' => 'Carlos Silva',
                'horario' => '08:00 - 12:00',
                'estacao_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Design Gráfico e Marketing Digital',
                'descricao' => 'Curso sobre design gráfico e estratégias de marketing digital.',
                'professor' => 'Ana Souza',
                'horario' => '13:00 - 17:00',
                'estacao_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maratona Maker',
                'descricao' => 'Curso prático sobre criação de projetos de engenharia e eletrônica.',
                'professor' => 'João Santos',
                'horario' => '09:00 - 15:00',
                'estacao_id' => 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Impressão 3D',
                'descricao' => 'Curso sobre técnicas e aplicações de impressão 3D.',
                'professor' => 'Maria Oliveira',
                'horario' => '10:00 - 14:00',
                'estacao_id' => 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Empreendedorismo',
                'descricao' => 'Curso sobre criação e gestão de novos negócios.',
                'professor' => 'Roberto Lima',
                'horario' => '14:00 - 18:00',
                'estacao_id' => 5, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Escrita de Projetos Culturais e Submissão de Editais',
                'descricao' => 'Curso sobre elaboração de projetos culturais e processos de submissão.',
                'professor' => 'Carlos Silva',
                'horario' => '08:00 - 12:00',
                'estacao_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Operador de Caixa',
                'descricao' => 'Curso sobre operações de caixa e atendimento ao cliente.',
                'professor' => 'Ana Souza',
                'horario' => '13:00 - 17:00',
                'estacao_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Pacote Office',
                'descricao' => 'Curso sobre ferramentas do Pacote Office, incluindo Word, Excel e PowerPoint.',
                'professor' => 'João Santos',
                'horario' => '09:00 - 15:00',
                'estacao_id' => 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Panificação',
                'descricao' => 'Curso sobre técnicas e receitas para panificação.',
                'professor' => 'Maria Oliveira',
                'horario' => '10:00 - 14:00',
                'estacao_id' => 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Design de Sobrancelhas',
                'descricao' => 'Curso sobre técnicas de design e maquiagem de sobrancelhas.',
                'professor' => 'Roberto Lima',
                'horario' => '14:00 - 18:00',
                'estacao_id' => 5, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Corte e Costura',
                'descricao' => 'Curso sobre técnicas de corte e costura de roupas.',
                'professor' => 'Carlos Silva',
                'horario' => '08:00 - 12:00',
                'estacao_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Encanador',
                'descricao' => 'Curso sobre técnicas e práticas de encanamento.',
                'professor' => 'Ana Souza',
                'horario' => '13:00 - 17:00',
                'estacao_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Eletricista',
                'descricao' => 'Curso sobre instalação e manutenção de sistemas elétricos.',
                'professor' => 'João Santos',
                'horario' => '09:00 - 15:00',
                'estacao_id' => 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
