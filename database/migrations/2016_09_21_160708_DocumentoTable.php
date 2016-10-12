<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->integer('tipodocs_id')->unsigned();
            $table->foreign('tipodocs_id')->references('id')->on('tipodocs');
            $table->string('codfuncional');
            $table->string('seriedoc');
            $table->string('nfolio');
            $table->datetime('desde');
            $table->datetime('hasta');
            $table->text('observacion')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('documentos');
    }
}
