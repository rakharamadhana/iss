<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            // Academic Information
            $table->string('academic_status');
            $table->string('faculty');
            $table->string('study_program');
            $table->string('year_enrolled');
            $table->string('registration_number');
            $table->string('pin_number');
            $table->string('payment_amount');
            $table->string('fund_source');
            $table->string('scholarship_status');
            $table->string('scholarship_name');
            $table->string('scholarship_amount');

            $table->timestamps();
        });

        Schema::table('academics', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academics');
    }
}
