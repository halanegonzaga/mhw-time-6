<?php

namespace App\Http\Controllers\Webservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Endereco;
use Illuminate\Support\Facades\Http;

class ViaCep extends Controller
{
    const ENDPOINT = "https://viacep.com.br/ws/%s/json/";

    /**
     * Acessando a API
     * Armazenando os dados no banco de dados
     * Retorna o objeto
     */
    public function search($cep)
    {

        $endereco = Endereco::where('cep', $cep)->first();

        if(!$endereco){
            // url 
            $url = sprintf(self::ENDPOINT, $cep);


            //curl
            $request = Http::get($url);
            $response = $request->json();

            // dados
            $cep = str_replace(['-', '/'], null, $response['cep']);
            $logradouro = $response['logradouro'];
            $bairro = $response['bairro'];
            $cidade = $response['localidade'];
            $uf = $response['uf'];

            // model
            $endereco = Endereco::create([
               'cep' => $cep,
               'logradouro' => $logradouro,
               'bairro' => $bairro,
               'cidade' => $cidade,
               'uf' => $uf 
            ]);
            
        }
        
        return $endereco;
    }
}
