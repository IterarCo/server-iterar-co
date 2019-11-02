<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseExamQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_exam_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('course_exam_id');

            $table->text('question_a');
            $table->text('answer_a');

            $table->text('question_b');
            $table->text('answer_b');

            $table->text('question_c');
            $table->text('answer_c');

            $table->text('question_d');
            $table->text('answer_d');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_exam_questions');
    }
}
