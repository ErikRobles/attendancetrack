<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOexExamQuestionMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oex_exam_question_masters', function (Blueprint $table) {
            $table->id();
            $table->string('exam_id')->nullable();
            $table->string('question')->nullable();
            $table->string('ans')->nullable();
            $table->string('options')->nullable();
            $table->string('status')->default('1');
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
        Schema::dropIfExists('oex_exam_question_masters');
    }
}
