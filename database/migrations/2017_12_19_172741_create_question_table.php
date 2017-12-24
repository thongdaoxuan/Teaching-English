<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('question', function (Blueprint $table) {
            $table->increments('qu_id');
            $table->string('qu_content');
            $table->string('qu_image');
            $table->string('qu_audio');
            $table->integer('qu_type');
            $table->integer('ca_id')->unsigned();
            $table->timestamps();
            $table->foreign('ca_id')->references('ca_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
