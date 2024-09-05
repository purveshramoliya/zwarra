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
        Schema::table('patientregistration', function (Blueprint $table) {
            //
             $table->string('Borderno')->after('Nationality')->nullable();
             $table->string('Sponserid')->after('Borderno')->nullable();
             $table->string('Passportid')->after('Sponserid')->nullable();
             $table->string('Iqamatype')->after('Passportid')->nullable();
             $table->text('Description')->after('Nationalid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patientregistration', function (Blueprint $table) {
            $table->dropColumn(['Borderno', 'Sponserid', 'Passportid' ,'Iqamatype' ,'Description']);
        });
    }
};
