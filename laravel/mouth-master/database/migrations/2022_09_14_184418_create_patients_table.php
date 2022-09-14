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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_initial');
            $table->string('birth_date');
            $table->string('sex');
            $table->integer('age');
            $table->string('religion');
            $table->string('nationality');
            $table->string('nickname');
            $table->string('home_no');
            $table->text('home_address');
            $table->string('occupation');
            $table->tinyInteger('dental_insurance');
            $table->string('effective_date')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('refferer')->nullable();
            $table->text('reason')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_occupation')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
