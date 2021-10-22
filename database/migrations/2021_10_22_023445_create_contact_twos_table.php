<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_twos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('empresa');
            $table->string('mail');
            $table->string('tel1');
            $table->string('tel3');
            $table->string('tel2');
            $table->string('pais');
            $table->text('mensaje');
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
        Schema::dropIfExists('contact_twos');
    }
}
