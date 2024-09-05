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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('transacationid')->nullable();
            $table->integer('serviceid')->nullable();
            $table->string('servicename')->nullable();
            $table->integer('subserviceid')->nullable();
            $table->string('subservicename')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->integer('healthcareid')->nullable();
            $table->date('paymentdate')->nullable();
            $table->date('bookingdate')->nullable();
            $table->string('timeslot')->nullable();
            $table->integer('price')->nullable();
            $table->string('paymentmethod')->nullable();
            $table->integer('accountno')->nullable();
            $table->string('cardholname')->nullable();
            $table->integer('cardno')->nullable();
            $table->string('cardexpdate')->nullable();
            $table->integer('cvvno')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
