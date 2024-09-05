<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmedicalspecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('submedicalspecialties');
        Schema::table('submedicalspecialties', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo')->nullable();
            $table->string('Enname')->nullable();
            $table->string('Arname')->nullable();
            $table->string('Enspecialties')->nullable();
            $table->string('Arspecialties')->nullable();
            $table->string('Status')->nullable();
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
        Schema::table('submedicalspecialties', function (Blueprint $table) {
            //
        });
    }
}
