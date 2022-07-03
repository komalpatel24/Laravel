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
            $table->id('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('courses');
            $table->string('gender');
            $table->integer('age');
            $table->date('date_of_birth');
            $table->integer('qualification');
            $table->integer('email');
            $table->bigInteger('mobile_no');
            $table->file('Imagefile');
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
