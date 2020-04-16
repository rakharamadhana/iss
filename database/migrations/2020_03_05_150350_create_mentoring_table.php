<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentoring', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_registration_number');

            // Mentoring Information
            $table->string('starting_year');
            $table->string('entrance');
            $table->string('mentor_name');
            $table->string('mentor_phone_number');
            $table->boolean('is_mentor');
            $table->integer('quran_recitation')->nullable();

            $table->timestamps();
        });

        Schema::table('mentoring', function (Blueprint $table) {
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
        Schema::dropIfExists('mentoring');
    }
}
