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
        Schema::table('payments', function (Blueprint $table) {
            //
     
        $table->string('status')->after('cvvno')->nullable();
        $table->string('bookingstatus')->after('status')->nullable();
        $table->text('comment')->after('bookingstatus')->nullable();
        $table->text('other')->after('comment')->nullable();
        $table->text('description')->after('other')->nullable();
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
