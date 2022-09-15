<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screenings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->tinyInteger('p1');
            $table->tinyInteger('p2');
            $table->tinyInteger('p3');
            $table->tinyInteger('p4');
            $table->tinyInteger('a1');
            $table->tinyInteger('a2');
            $table->string('o1');
            $table->string('o2');
            $table->string('o3');
            $table->string('o4');
            $table->string('o5');
            $table->tinyInteger('t1');
            $table->tinyInteger('t2');
            $table->tinyInteger('t3');
            $table->tinyInteger('t4');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('screenings');
    }
};
