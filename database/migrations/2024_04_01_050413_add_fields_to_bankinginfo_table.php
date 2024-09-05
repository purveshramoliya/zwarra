<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldstoBankinginfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bankinginfo', function (Blueprint $table) {
             $table->string('Serviceprovider')->after('Doctor')->nullable();
             $table->string('Accountname')->after('Address')->nullable();
             $table->integer('Accountnumber')->after('Accountname')->nullable();
             $table->string('Bankname')->after('Accountnumber')->nullable();
             $table->string('Ibannumber')->after('Bankname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bankinginfo', function (Blueprint $table) {
        });
    }
}
