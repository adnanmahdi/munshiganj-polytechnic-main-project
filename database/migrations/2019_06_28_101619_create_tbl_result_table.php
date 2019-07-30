<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_result', function (Blueprint $table) {
            $table->increments('result_id');
            $table->string('result_date');
            $table->string('result_semester');
            $table->string('result_depertment');
            $table->string('result_shift');
            $table->string('result_file');

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
        Schema::dropIfExists('tbl_result');
    }
}
