<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientregistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('Patientregistration');
        Schema::table('Patientregistration', function (Blueprint $table) {
            //
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('confirmpassword')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('status')->nullable();
            $table->string('nationalid')->nullable();
            $table->timestamp('CreatedAt')->useCurrent();
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
        Schema::table('Patientregistration', function (Blueprint $table) {
            //
        });
    }
}
