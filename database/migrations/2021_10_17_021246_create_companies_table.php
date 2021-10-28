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
            $table->integer('student_id')->nullable()->onDelete('set null');
            $table->integer('teacher_id')->nullable()->onDelete('set null');
            $table->string('contact1')->default('No name provided')->nullable()->onDelete('set null');
            $table->string('contact2')->default('No name provided')->nullable()->onDelete('set null');
            $table->string('phone1')->default('No number provided')->nullable()->onDelete('set null');
            $table->string('phone2')->default('No number provided')->nullable()->onDelete('set null');
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
