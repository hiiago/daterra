<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgricultorCoperativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agricultor_coperativas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dap', 255);
            $table->date('data_dap');
            $table->string('telefone', 255)->nullable();
            $table->string('celular', 255)->nullable();
            $table->string('whatsapp', 255)->nullable();
            $table->string('estado', 2);
            $table->string('uf', 2);
            $table->string('cidade', 255);
            $table->string('rua', 255);
            $table->integer('número');
            $table->string('cep', 10);
            $table->string('rg', 15);
            $table->string('cpf', 15);
            $table->integer('cooperativa_id');
            $table->foreign('cooperativa_id')->references('id')->on('cooperativas')
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
        Schema::drop('agricultor_coperativas');
    }
}
