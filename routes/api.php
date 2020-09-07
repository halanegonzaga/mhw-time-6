<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webservice\ViaCep;

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
Route::get('/peopleZ', function () {
    $data = [
        'cpf' => '47538899049',
        'name' => 'Regiane Alves Leite',
        'gender' => 'F',
        'age' => 53
    ];

    return response()->json($data);
});

# API ReceitaWS
Route::get('/company/{cnpj}', function ($cnpj) {
    $data = [
        'cnpj' => $cnpj,
        'name' => 'GOOGLE BRASIL INTERNET LTDA'
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
