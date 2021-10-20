<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('student_id')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->string('contact1')->default('No name provided')->nullable();
            $table->string('contact2')->default('No name provided')->nullable();
            $table->string('phone1')->default('No number provided')->nullable();
            $table->string('phone2')->default('No number provided')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
