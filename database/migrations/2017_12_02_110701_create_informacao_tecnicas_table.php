<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacaoTecnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacao_tecnicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('informacao');
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
        Schema::drop('informacao_tecnicas');
    }
}
