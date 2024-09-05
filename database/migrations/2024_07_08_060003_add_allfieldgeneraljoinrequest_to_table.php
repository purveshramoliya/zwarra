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
        Schema::table('generaljoinrequest', function (Blueprint $table) {
        $table->string('Companyname')->after('City')->nullable();
        $table->integer('Noofemployee')->after('Companyname')->nullable(); // Store multiple services in JSON format
        $table->text('Insurance')->after('Noofemployee')->nullable();
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
