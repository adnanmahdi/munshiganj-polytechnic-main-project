<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teacher', function (Blueprint $table) {
             $table->increments('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_photo');
            $table->longText('teacher_address');
            $table->longText('teacher_designation');
            $table->string('teacher_depertment');
            $table->string('teacher_phone');
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
        Schema::dropIfExists('tbl_teacher');
    }
}
