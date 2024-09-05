<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalspecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('medicalspecialties');
        Schema::table('medicalspecialties', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo')->nullable();
            $table->string('Enname')->nullable();
            $table->string('Arname')->nullable();
            $table->string('Estimatedtime')->nullable();
            $table->boolean('Status')->nullable();
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
        Schema::table('medicalspecialties', function (Blueprint $table) {
            //
        });
    }
}
