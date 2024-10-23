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
        Schema::table('subservices', function (Blueprint $table) {
            $table->string('Typeofpractitioner')->after('Healthcare')->nullable(); // Add the new column
        });
    }

    public function down()
    {
        Schema::table('subservices', function (Blueprint $table) {
            $table->dropColumn('Typeofpractitioner'); // Remove the column if rolling back
        });
    }
};
