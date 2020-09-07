<?php

namespace App\Http\Controllers\Webservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Endereco;

class ViaCep extends Controller
{
    const ENDPOINT = "https://viacep.com.br/ws/%s/json/";

    /**
     * Acessando a API
     * Armazenando os dados no banco de dados
     * Retorna o objeto
     */
    public function getData($cep)
    {

        $endreco = Endereco::where('cep', $cep)->first();

        if(!$endreco){
            // url 
            $url = sprintf(self::ENDPOINT, $cep);


            //curl
            $response = Curl::to($url)
            ->asJson()
            ->get();

            // dados
            $cep = $response->cep;
            $logradouro = $response->logradouro;
            $bairro = $response->bairro;
            $cidade = $response->localidade;
            $uf = $response->uf;

            // model
            $endreco = Endereco::create([
               'cep' => $cep,
               'logradouro' => $response->logradouro,
               'bairro' => $bairro,
               'cidade' => $cidade,
               'uf' => $uf 
            ]);
            
        }
        
        return $endreco;
    }
}
