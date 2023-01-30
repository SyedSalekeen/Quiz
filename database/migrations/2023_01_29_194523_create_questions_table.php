<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string("QuestionText")->length(300);
            $table->string("QuestionAnswer1")->length(100)->nullable();
            $table->string("QuestionAnswer2")->length(100)->nullable();
            $table->string("QuestionAnswer3")->length(100)->nullable();
            $table->string("QuestionAnswer4")->length(100)->nullable();
            $table->string("QuestionAnswer5")->length(100)->nullable();
            $table->bigInteger('CatID');

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
        Schema::dropIfExists('questions');
    }
}
