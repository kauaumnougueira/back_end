<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'curso';

    protected $fillable = [
        'nome',
        'descricao',
        'professor',
        'horario',
        'estacao_id'
    ];

    public function estacao()
    {
        return $this->belongsTo(Estacao::class);
    }
}
