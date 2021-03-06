<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCooperativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperativas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnpj', 18);
            $table->string('razao_social', 255)->nullable();
            $table->string('nome_fantasia', 255)->nullable();
            $table->string('dap', 255);
            $table->date('data_dap');
            $table->string('telefone', 255)->nullable();
            $table->string('celular', 255)->nullable();
            $table->string('whatsapp', 255)->nullable();
            $table->string('estado', 45);
            $table->string('uf', 2);
            $table->string('cidade', 255);
            $table->string('rua', 255);
            $table->integer('numero');
            $table->string('cep', 10);
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cooperativas');
    }
}
