<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estacao extends Model
{
    use HasFactory;

    protected $table = 'estacao';

    protected $fillable = [
        'nome',
        'horario',
        'contato',
        'status',
        'endereco_id',
        'gestor_id'
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }

    public function gestor()
    {
        return $this->belongsTo(Gestor::class);
    }
}
