<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    # Tabela
    protected $table = 'empresas';

    # Datas
    public $timestamps = true;

    # Colunas para atribuicão
    
    protected $fillable = [
        'cnpj',
        'nome',
        'fantasia',
        'email',
        'telefone',
        'atv_principal'
    ];
}
