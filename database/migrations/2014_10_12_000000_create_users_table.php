<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('company_id')->nullable()->onDelete('set null');
            $table->integer('level_id')->nullable()->onDelete('set null');
            $table->integer('student_id')->nullable()->onDelete('set null');
            $table->integer('teacher_id')->comment('Teacher_id=User_id')->nullable();
            $table->string('email')->unique();
            $table->string('role')->default('Student');
            $table->string('status')->nullable();
            $table->string('exam')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable()->onDelete('set null');
            $table->foreign('attendance_id')->references('id')->on('attendances')->nullable()->onDelete('set null');
            $table->foreign('performance_id')->references('id')->on('performances')->nullable()->onDelete('set null');
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
