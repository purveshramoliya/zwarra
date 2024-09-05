<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('ourservices');
        Schema::table('ourservices', function (Blueprint $table) {
            //
            $table->id();
            $table->text('Logo')->nullable();
            $table->string('Enname', 191)->nullable();
            $table->string('Arname', 191)->nullable();
            $table->text('Endescription')->nullable();
            $table->text('Ardescription')->nullable();
            $table->string('Status', 191)->nullable();
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
        Schema::table('ourservices', function (Blueprint $table) {
            //
        });
    }
}
