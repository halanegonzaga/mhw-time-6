<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/people', function () {
    $data = [
        'cpf' => '47538899049',
        'name' => 'Regiane Alves Leite',
        'gender' => 'F',
        'age' => 53
    ];

    return response()->json($data);
});

Route::get('/company', function () {
    $data = [
        'cnpj' => '06990590000123',
        'name' => 'GOOGLE BRASIL INTERNET LTDA'
    ];

    return response()->json($data);
});

Route::get('/location', function () {
    $data = [
        'cep' => '29164510',
        'address' => 'Rua Gilseppi Verdi',
        'burgh' => 'Praia de Carapebus',
        'city' => 'Serra',
        'uf' => 'ES'
    ];

    return response()->json($data);
});
