<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProducaoCooperativa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producao_cooperativa', function (Blueprint $table) {
            $table->increments('id');
            $table->text('producao');
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
        Schema::drop('producao_cooperativa');
    }
}
