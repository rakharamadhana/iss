<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            // Personal Details
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('gender');
            $table->text('identity_address');
            $table->text('current_address');
            $table->string('blood_type');
            $table->string('interest');

            // Contact Information
            $table->string('phone_number');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone_number');

            $table->timestamps();
        });

        Schema::table('personals', function (Blueprint $table) {
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
        Schema::dropIfExists('personals');
    }
}
