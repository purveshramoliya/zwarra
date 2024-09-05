<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoindocrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('Joindocrequest');
        Schema::create('Joindocrequest', function (Blueprint $table) {
            //
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('specialization')->nullable();
            $table->string('subspecialization')->nullable();
            $table->string('scfhs')->nullable();
            $table->string('scfhsno')->nullable();
            $table->string('filename')->nullable();
            $table->text('service_type')->nullable(); // To store multiple service types as JSON
            $table->text('description')->nullable();
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
        Schema::table('Joindocrequest', function (Blueprint $table) {
            //
        });
    }
}
