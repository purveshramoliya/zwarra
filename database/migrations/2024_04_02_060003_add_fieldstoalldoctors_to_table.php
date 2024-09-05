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
        Schema::table('Alldoctors', function (Blueprint $table) {
            //
     
        $table->string('Languages')->after('id')->nullable();
        $table->string('Degree')->after('Languages')->nullable();
        $table->string('Department')->after('Degree')->nullable();
        $table->date('Med_reg_expiry')->after('Department')->nullable();
        $table->integer('Med_reg_no')->after('Med_reg_expiry')->nullable();
    
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
