<?php

namespace App\Http\Controllers\Webservice;

use App\Http\Controllers\Controller;
use App\Model\Pessoa;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class Gr1d extends Controller
{
    const ENDPOINT = "https://gateway.gr1d.io/sandbox/dataseek/datasearch/v1/pessoas/?cpf=%s";

    /**
     * Acessando a API
     * Armazenando os dados no banco de dados
     * Retorna o objeto
     */
    public function search($cpf)
    {
        $pessoa = Pessoa::where('cpf', $cpf)->first();
        if (!$pessoa) {
            // url
            $url = sprintf(self::ENDPOINT, $cpf);

            //curl
            $request = Http::withHeaders(['X-api-key' => '350208fb-f4a3-4e36-8fd0-e4ac37f4e1a2'])->get($url);
            $response = $request->json();

            // dados
            $cpf = $response['pf'][0]['cpf'];
            $nome = $response['pf'][0]['nome'];
            $nascimento = Carbon::parse(str_replace('/', '-', $response['pf'][0]['dn']))->format('Y-m-d');
            $sexo = $response['pf'][0]['sexo'];
            $classe = $response['pf'][0]['classe'];

            // model
            $pessoa = Pessoa::create([
                'cpf' => $cpf,
                'nome' => $nome,
                'nascimento' => $nascimento,
                'sexo' => $sexo,
                'classe' => $classe
            ]);

        }

        return $pessoa;
    }
}
