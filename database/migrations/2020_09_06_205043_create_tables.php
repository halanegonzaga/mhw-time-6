<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('cpf', 11);
            $table->string('nome', 100);
            $table->date('nascimento');
            $table->char('sexo', 1)->default('I');
            $table->char('classe', 1)->default('E');
            $table->boolean('filhos')->default(false);
            $table->boolean('empreendedor')->default(false);
            $table->timestamps();
        });

        Schema::create('ramos', function(Blueprint $table){
            $table->id();
            $table->string('atividade', 100);
            $table->timestamps();
        });

        Schema::create('empresas', function(Blueprint $table){
            $table->id();
            $table->string('cnpj', 14);
            $table->string('nome', 120);
            $table->string('fantasia', 120);
            $table->string('email', 100)->nullable();
            $table->string('telefone', 100)->nullable();
            $table->string('atv_principal', 200);
            $table->timestamps();
        });

        Schema::create('enderecos', function(Blueprint $table){
            $table->id();
            $table->string('cep', 8);
            $table->string('logradouro', 200);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->char('uf', 2);
            $table->timestamps();
        });

        Schema::create('emails', function(Blueprint $table){
            $table->id();
            $table->string('email', 200);
            $table->timestamps();
        });

        Schema::create('telefones', function(Blueprint $table){
            $table->id();
            $table->string('telefone', 11);
            $table->timestamps();
        });

        // tabelas de relacionamento
        Schema::create('pessoa_endereco', function(Blueprint $table){
            $table->integer('pessoa_id');
            $table->integer('endereco_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });

        Schema::create('pessoa_empresa', function(Blueprint $table){
            $table->integer('pessoa_id');
            $table->integer('empresa_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });

        Schema::create('pessoa_email', function(Blueprint $table){
            $table->integer('pessoa_id');
            $table->integer('email_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('email_id')->references('id')->on('emails');
        });

        Schema::create('pessoa_telefone', function(Blueprint $table){
            $table->integer('pessoa_id');
            $table->integer('telefone_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('telefone_id')->references('id')->on('telefones');
        });

        Schema::create('pessoa_ramo', function(Blueprint $table){
            $table->integer('pessoa_id');
            $table->integer('ramo_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('ramo_id')->references('id')->on('ramos');
        });

        Schema::create('filtros', function(Blueprint $table){
            $table->id();
            $table->integer('pessoa_id');
            $table->text('json');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_endereco');
        Schema::dropIfExists('pessoa_empresa');
        Schema::dropIfExists('pessoa_email');
        Schema::dropIfExists('pessoa_telefone');
        Schema::dropIfExists('pessoa_ramo');
        Schema::dropIfExists('filtros');

        Schema::dropIfExists('empresas');
        Schema::dropIfExists('enderecos');
        Schema::dropIfExists('emails');
        Schema::dropIfExists('telefones');

        Schema::dropIfExists('ramos');
        Schema::dropIfExists('pessoas');
    }
}
