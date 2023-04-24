<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome_paciente',
        'rg',
        'cpf',
        'data_nascimento',
        'idade',
        'sexo',
        'cartao_sus',
        'estado_paciente',
        'responsavel',
        'descricao_evolucao',
    ];
}
