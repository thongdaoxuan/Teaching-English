<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->increments('an_id');
            $table->string('an_content');
            $table->string('an_image');
            $table->string('an_audio');
            $table->integer('an_type');
            $table->integer('qu_id')->unsigned();
            $table->string('an_spell');
            $table->string('an_correct');
            $table->timestamps();
            $table->foreign('qu_id')->references('qu_id')->on('question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('answers');
    }
}
