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
        Schema::create('bodies', function (Blueprint $table) {
            $table->id();
            $table->string('Logo')->nullable();
            $table->string('Enname')->nullable();
            $table->string('Arname')->nullable();
            $table->text('Endescription')->nullable();
            $table->text('Ardescription')->nullable();
            $table->string('service')->nullable();
            $table->string('mainservicetype')->nullable();
            $table->string('servicetype')->nullable();
            $table->string('packages')->nullable();
            $table->string('Single')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('body');
    }
};
