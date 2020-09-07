<?php

namespace App\Http\Controllers\Webservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Empresa;
use Illuminate\Support\Facades\Http;

class ReceitaWS extends Controller
{
    const ENDPOINT = "https://www.receitaws.com.br/v1/cnpj/%s";

    public function search($cnpj)
    {
        $business = Empresa::where('cnpj', $cnpj)->first();
        if(!$business){
            // url 
            $url = sprintf(self::ENDPOINT, $cnpj);

            //curl
            $request = Http::get($url);
            $response = $request->json();

            // model
            $business = Empresa::create([
               'cnpj' => $cnpj,
               'nome' => $response['nome'],
               'fantasia' => $response['fantasia'],
               'telefone' => $response['telefone'],
               'email' => $response['email'],
               'atv_principal' => $response['atividade_principal'][0]['text'] 
            ]);
            
        }
        
        return $business;
    }
}
