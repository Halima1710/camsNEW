<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarpentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpenters', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->Integer('phone_number');
            $table->date('hire_date');
            $table->string('job_name');
            $table->Integer('salary');

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
        Schema::dropIfExists('carpenters');
    }
}
