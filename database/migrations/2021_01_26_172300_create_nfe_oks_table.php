<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNfeOksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nfe_oks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resumo_id')->constrained('resumo_pends')->onDelete('cascade');
            $table->foreignId('empresa_id')->constrained('empresas')->onDelete('cascade');
            $table->string('cnpj_emit', 30);
            $table->string('razao_social_emit', 2000);
            $table->string('chave_nota', 500);
            $table->char('uf', 2);
            $table->string('date_emissao', 100);
            $table->string('num_nfe', 100);
            $table->string('valor_nfe', 50);
            $table->dateTime('crawl_date', 0)->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('nfe_oks');
    }
}
