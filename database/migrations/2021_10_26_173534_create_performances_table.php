<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->integer('teacher_id')->nullable()->onDelete('set null');
            $table->string('last_unit_covered')->nullable();
            $table->integer('last_page_viewed')->nullable();
            $table->string('exam_type')->nullable();
            $table->integer('exam_score')->nullable();
            $table->text('comments')->nullable();
            $table->foreignId('student_id')->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('performances');
    }
}
