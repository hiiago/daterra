<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
            $table->string('pdf');
            $table->integer('secretaria_id');
            $table->foreign('secretaria_id')->references('id')->on('secretarias')
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
        Schema::drop('editals');
    }
}
