<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment', 500);
            $table->integer('question_id')->unsigned()->unique('answers_question_id_unique_foreign');
            $table->timestamps();
            $table->dateTime('deleted_at');
            
            $table->foreign('question_id', 'answers_question_id_unique_foreign')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
        
        $table->dropUnique('question_id');
    }
}
