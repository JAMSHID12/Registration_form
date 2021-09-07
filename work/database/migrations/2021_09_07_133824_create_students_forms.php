<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_forms', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->integer('phone');
            $table->String('emial');
            $table->integer('course_id');
            $table->foreign('course_id')->references('course_id')->on('coureses_list');
            $table->text('comment');
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
        Schema::dropIfExists('students_forms');
    }
}
