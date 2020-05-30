<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTipoSubmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_tipo_subms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->boolean('texto')->nullable();
            $table->boolean('arquivo')->nullable();
            
            $table->boolean('caracteres')->nullable();
            $table->bigInteger('mincaracteres')->nullable();
            $table->bigInteger('maxcaracteres')->nullable();

            $table->boolean('palavras')->nullable();
            $table->bigInteger('minpalavras')->nullable();
            $table->bigInteger('maxpalavras')->nullable();
            
            $table->boolean('pdf')->nullable();
            $table->boolean('jpg')->nullable();
            $table->boolean('jpeg')->nullable();
            $table->boolean('png')->nullable();
            $table->boolean('docx')->nullable();
            $table->boolean('odt')->nullable();

            $table->bigInteger("modalidadeId")->nullable();
            $table->foreign("modalidadeId")->references("id")->on("modalidades");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_tipo_submissao');
    }
}