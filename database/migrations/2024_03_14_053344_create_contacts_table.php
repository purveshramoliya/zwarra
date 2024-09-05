<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('contacts');
        Schema::table('contacts', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Subject')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->text('Message')->nullable();
            $table->string('Doctor')->unique();
            $table->string('Servicename')->nullable();
            $table->string('Type')->nullable();
            $table->string('Status')->nullable();
            $table->string('Healthcare')->nullable();
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
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}
