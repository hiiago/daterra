<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProducaoAgricultor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producao_agricultor', function (Blueprint $table) {
            $table->increments('id');
            $table->text('producao');
            $table->integer('agricultor_id');
            $table->foreign('agricultor_id')->references('id')->on('agricultors')
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
        Schema::drop('producao_agricultor');
    }
}
