<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    # Tabela
    protected $table = 'enderecos';

    # Datas
    public $timestamps = true;

    # Colunas para atribuicão
    
    protected $fillable = [
        'cep',
        'logradouro',
        'bairro',
        'cidade',
        'uf'
    ];
}
