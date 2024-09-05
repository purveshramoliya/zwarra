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
        Schema::table('joindocrequest', function (Blueprint $table) {
            //
     
        $table->string('languages')->after('city')->nullable();
        $table->string('degree')->after('languages')->nullable();
        $table->string('department')->after('degree')->nullable();
        $table->date('med_reg_expiry')->after('department')->nullable();
        $table->integer('med_reg_no')->after('med_reg_expiry')->nullable();
    
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
