<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    # Tabela
    protected $table = 'pessoas';

    # Datas
    public $timestamps = true;

    # Colunas para atribuicão

    protected $fillable = [
        'cpf',
        'nome',
        'nascimento',
        'sexo',
        'classe',
        'filhos',
        'empreendedor'
    ];
}
