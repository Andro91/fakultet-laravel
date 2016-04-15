<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePohadjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pohadjas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('predmets_id');
            $table->integer('students_id');
            $table->foreign('predmets_id')->references('id')->on('predmets');
            $table->foreign('students_id')->references('id')->on('students');
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
        Schema::drop('pohadjas');
    }
}
