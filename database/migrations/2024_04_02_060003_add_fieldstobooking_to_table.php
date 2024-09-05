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
        Schema::table('bookings', function (Blueprint $table) {
            //
     
        $table->string('Typeoftest')->after('Type')->nullable();
        $table->string('Typeofvisit')->after('Typeoftest')->nullable();
        $table->string('Gender')->after('Typeofvisit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Drop columns in the reverse order they were added
            $table->dropColumn(['Typeoftest', 'Typeofvisit', 'Gender']);
        });
    }
};
