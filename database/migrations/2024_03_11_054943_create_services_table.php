<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('services');
        Schema::table('services', function (Blueprint $table) {
            //
            $table->id();
            $table->string('Enhealthcare', 191)->nullable();
            $table->string('Arhealthcare', 191)->nullable();
            $table->string('Enservicename', 191)->nullable();
            $table->string('Arservicename', 191)->nullable();
            $table->string('Ensubservicename', 191)->nullable();
            $table->string('Arsubservicename', 191)->nullable();
            $table->boolean('Status')->default(0);
            $table->string('Estimatedtime', 191)->nullable();
            $table->string('Price', 191)->nullable();
            $table->string('Newprice', 191)->nullable();
            $table->text('Gender')->nullable();
            $table->text('Logo')->nullable();
            $table->timestamp('CreatedAt')->useCurrent();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    //     Schema::table('services', function (Blueprint $table) {
    //     //Schema::dropIfExists('services');
    //     $table->integer('Spid')->nullable();
    // });
    }
}
