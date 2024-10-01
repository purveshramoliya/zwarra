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
        //
        Schema::table('serviceprovider', function (Blueprint $table) {
            // Make the 'Regcertificate' column nullable
            $table->text('Regcertificate')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('serviceprovider', function (Blueprint $table) {
           
            $table->text('Regcertificate')->change();
        });
    }
};
