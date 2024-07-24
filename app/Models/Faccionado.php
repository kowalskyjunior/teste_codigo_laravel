<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faccionado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_faccionado',
        'genero',
        'data_nascimento',
        'cpf',
        'nacionalidade',
        'estado_naturalidade',
        'cidade_naturalidade',
        'nome_mae',
        'nome_pai',
        'nome_conjuge',
        'organizacao_faccionado',
    ];
}
