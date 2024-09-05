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
        Schema::table('zone', function (Blueprint $table) {
             $table->integer('country_id')->after('coordinates')->nullable();
             $table->integer('city_id')->after('country_id')->nullable();
             $table->integer('zone_id')->after('city_id')->nullable();
             $table->string('shape_type')->after('zone_id')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zone', function (Blueprint $table) {
        });
    }
};
