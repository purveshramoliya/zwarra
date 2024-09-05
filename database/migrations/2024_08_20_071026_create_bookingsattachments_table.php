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
        Schema::create('bookingsattachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bookings_id')->constrained('bookings')->onDelete('cascade'); // Foreign key to bookings table
            $table->string('filename');
            $table->string('file_path');
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
        Schema::dropIfExists('bookingsattachments');
    }
};
