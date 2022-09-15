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
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('previous_dentist');
            $table->string('last_dental_visit');
            $table->string('physician');
            $table->string('specialty');
            $table->string('office_address');
            $table->string('office_no');
            $table->tinyInteger('q1');
            $table->tinyInteger('q2');
            $table->string('q2_text');
            $table->tinyInteger('q3');
            $table->string('q3_text');
            $table->tinyInteger('q4');
            $table->string('q4_text');
            $table->tinyInteger('q5');
            $table->string('q5_text');
            $table->tinyInteger('q6');
            $table->tinyInteger('q7');
            $table->string('allergies');
            $table->time('bleeding_time');
            $table->string('blood_type');
            $table->integer('blood_pressure');
            $table->tinyInteger('women_q1')->nullable();
            $table->tinyInteger('women_q2')->nullable();
            $table->tinyInteger('women_q3')->nullable();
            $table->string('illnesses');
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
        Schema::dropIfExists('medical_histories');
    }
};
