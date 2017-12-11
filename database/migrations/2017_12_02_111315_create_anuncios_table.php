<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('qtd');
            $table->decimal('preco', 10, 2);
            $table->text('descricao');
            $table->string('imagem');
            $table->integer('categoria_id')->nullable()->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria_anuncios')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('agricultor_id')->nullable()->unsigned();
            $table->foreign('agricultor_id')->references('id')->on('agricultors')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cooperativa_id')->nullable()->unsigned();
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
        Schema::drop('anuncios');
    }
}
