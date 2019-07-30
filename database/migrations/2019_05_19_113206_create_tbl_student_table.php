<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_student', function (Blueprint $table) {
          $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_rool');
            $table->string('student_father_name');
            $table->string('student_mother_name');
         
             $table->string('student_phone');
            $table->string('student_photo');
            $table->string('student_session');
            $table->longText('student_address');
            $table->string('student_admissionyear');
            $table->string('student_depertment');
            $table->string('student_reg');
            $table->string('student_shift');


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
        Schema::dropIfExists('tbl_student');
    }
}
