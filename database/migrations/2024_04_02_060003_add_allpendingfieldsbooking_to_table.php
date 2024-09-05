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
        Schema::table('Bookings', function (Blueprint $table) {
            //
        $table->json('Subservices')->after('Servicename')->nullable(); // Store multiple services in JSON format
        $table->integer('Qty')->after('Subservices')->nullable();
        $table->string('Timeslot')->after('Date')->nullable();
        $table->decimal('Price', 8, 2)->after('Timeslot')->nullable();
        $table->json('Patients')->after('Price')->nullable(); // Store multiple patients in JSON format
        $table->text('Description')->after('Patients')->nullable();
        $table->text('Comments')->after('Description')->nullable();
        $table->text('Others')->after('Comments')->nullable();
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
