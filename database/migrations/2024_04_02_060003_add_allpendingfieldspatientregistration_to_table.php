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
        $table->string('Bloodgroup')->after('Dob')->nullable(); // Store multiple services in JSON format
        $table->string('Relationship')->after('Bloodgroup')->nullable();
        $table->string('InsuranceCompany')->after('Relationship')->nullable();
        $table->string('Insuranceaccno')->after('InsuranceCompany')->nullable();
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
