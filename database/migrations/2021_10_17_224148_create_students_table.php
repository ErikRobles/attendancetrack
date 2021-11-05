<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('company_id')->nullable();
            $table->integer('level_id')->nullable();
            $table->integer('teacher_id')->comment('Teacher_id=User_id')->nullable();
            $table->string('category')->nullable();
            $table->string('email')->nullable();
            $table->string('exam')->nullable();
            $table->string('password')->nullable();
            $table->string('role_as')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('students');
    }
}
