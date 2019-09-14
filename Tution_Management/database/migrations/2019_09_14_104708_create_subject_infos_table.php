<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subjectName');
            $table->unsignedBigInteger('class_id');

            

            $table->foreign('class_id')->references('id')->on('class_infos');
            

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
        Schema::dropIfExists('subject_infos');
    }
}
