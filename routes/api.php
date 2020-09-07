<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webservice\ViaCep;
use App\Http\Controllers\Webservice\ReceitaWS;
use App\Http\Controllers\Webservice\Gr1d;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

# API Gr1d
Route::get('/people', function () {
    $cpf = "47538899049";

    $ws = new Gr1d;
    $result = $ws->search($cpf);

    $data = [
        'cpf' => $cpf,
        'name' => $result->nome,
        'gender' => $result->sexo
    ];

    return response()->json($data);
});

# API ReceitaWS
Route::get('/company/{cnpj}', function ($cnpj) {
    $ws = new ReceitaWS;
    $result = $ws->search($cnpj);

    $data = [
        'cnpj' => $cnpj,
        'name' => $result->fantasia,
        'email' => $result->email
    ];

    return response()->json($data);
});

# API ViaCEP
Route::get('/location/{cep}', function ($cep) {
    $ws = new ViaCep;
    $result = $ws->search($cep);

    $data = [
        'cep' => $result->cep,
        'address' => $result->logradouro,
        'burgh' => $result->bairro,
        'city' => $result->cidade,
        'uf' => $result->uf
    ];


    return response()->json($data);
});
