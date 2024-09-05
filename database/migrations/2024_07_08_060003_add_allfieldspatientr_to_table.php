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
        Schema::table('patientregistration', function (Blueprint $table) {
            //
        $table->integer('Age')->after('Dob')->nullable(); // Store multiple services in JSON format
        $table->string('Nationality')->after('Age')->nullable();
        $table->string('Maritalstatus')->after('Nationality')->nullable();
        $table->string('Height')->after('Maritalstatus')->nullable();
        $table->string('Weight')->after('Height')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Bookings', function (Blueprint $table) {
            //
        });
    }
};
