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
        Schema::create('Scheduleconfiguration', function (Blueprint $table) {
        $table->id();
        $table->integer('Healthcareid')->nullable();
        $table->string('Session')->nullable();
        $table->string('Dayname')->nullable();
        $table->string('Servicetype')->nullable();
        $table->integer('Capacity')->nullable();
        $table->time('Starttime')->nullable();
        $table->time('Endtime')->nullable();
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
        Schema::table('Scheduleconfiguration', function (Blueprint $table) {
            //
        });
    }
};
