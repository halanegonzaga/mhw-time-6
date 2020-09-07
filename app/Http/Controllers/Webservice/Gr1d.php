<?php

namespace App\Http\Controllers\Webservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Pessoa;


class Gr1d extends Controller
{
    //
    const ENDPOINT = "https://gateway.gr1d.io/sandbox/dataseek/datasearch/v1/pessoas/?cpf=%s";
    /**
     * Acessando a API
     * Armazenando os dados no banco de dados
     * Retorna o objeto
     */
    
public function searchCPF($cpf)
    {
    $pessoa = Pessoa::where('cpf', $cpf)->first();
    
        if(!$pessoa){
            // url 
            $url = sprintf(self::ENDPOINT, $cpf);

        //curl
        
            $request = Http::withHeaders(['X-api-key' => 'token']) -> get($url);
            $response = $request->json();
            
            // "pf": {     "cpf": "11111111111",     "nome": "nome da pessoa fisica",


       // dados
        $cpf = $response['pf']['cpf'];  
        
        $nome = $response['pf']['nome'];;
        $nascimento = $response['pf']['dn'];;
        $sexo = $response['pf']['sexo'];
        $classe = $response['pf']['classe'];
        $email = $response['pf']['email'];
        
    
       // model
            $pessoa = Pessoa::create([
               'cpf' => $cpf,
               'nome' => $nome,
               'nacimento' => $nascimento,
               'sexo' => $sexo,
               'classe' => $classe,
               'email' => $email
            ]);
            
        }
        
        return $pessoa;
    }
}

