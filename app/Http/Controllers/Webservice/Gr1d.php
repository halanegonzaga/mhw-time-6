<?php

namespace App\Http\Controllers\Webservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Pessoa;


class Gr1d extends Controller
{
    //
    const ENDPOINT = "https://gateway.gr1d.io/sandbox/dataseek/datasearch/v1/pessoas/?cpf=05588411551";
    /**
     * Acessando a API
     * Armazenando os dados no banco de dados
     * Retorna o objeto
     */
    
public function getCPF($nome)
    {

        $nascimento = nascimento::where('nome', $nome)->first();
        
        if(!$nascimento){
            // url 
            $url = sprintf(self::ENDPOINT, $nome);


            //curl
            $response = Curl::to($url)
               ->asJson()
                ->get();

       // dados
        $cpf = $response->cpf;
        $nome = $response->nome;
        $nascimento = $response->nascimento;
        $sexo = $response->sexo;
        $classe = $response->classe;

       // model
            $nascimento = nascimento::create([
               'cpf' => $cpf,
               'nome' => $response->nome,
               'sexo' => $sexo,
               'classe' => $classe,
            ]);
            
        }
        
        return $nascimento;
    }
}

