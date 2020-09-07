<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ramo extends Model
{
    # Tabela
    protected $table = 'ramos';

    # Datas
    public $timestamps = true;

    # Colunas para atribuicão
    
    protected $fillable = [
        'atividade'
    ];
}
