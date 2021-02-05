<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id');
            $table->string('login', 100);
            $table->string('senha', 100);
            $table->string('cert', 500);
            $table->string('cert_senha', 500);
            $table->date('cert_validade');
            $table->string('email', 200);
            $table->string('telefone', 20);
            $table->integer('cnpj');
            $table->integer('plano_id');
            $table->string('endereco', 200);
            $table->integer('numero');
            $table->string('bairro', 200);
            $table->string('cidade', 200);
            $table->string('uf', 2);
            $table->date('data_cadastro');
            $table->date('data_expiracao');
            $table->date('data_inicio');
            $table->integer('termos_aceite');
            $table->date('data_termo_aceite');
            $table->string('cartao_bandeira', 50);
            $table->integer('cartao_cvc');
            $table->string('cartao_token', 500);
            $table->string('status_pago', 10);
            $table->integer('tipo_cert');
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
        Schema::dropIfExists('usuarios');
    }
}
