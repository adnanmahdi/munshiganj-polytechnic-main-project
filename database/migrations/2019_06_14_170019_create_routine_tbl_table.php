<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutineTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routine_tbl', function (Blueprint $table) {
            $table->increments('routine_id');
              $table->string('routine_date');
            $table->longText('add_routine_name');
            $table->string('routine_depertment');
            $table->string('routine_shift');
            $table->string('routine_file');
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
        Schema::dropIfExists('routine_tbl');
    }
}
