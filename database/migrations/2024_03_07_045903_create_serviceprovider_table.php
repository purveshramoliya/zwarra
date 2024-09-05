<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceproviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('serviceprovider');
        Schema::table('serviceprovider', function (Blueprint $table) {
            $table->id();
            $table->string('Enname', 191)->nullable();
            $table->string('Arname', 191)->nullable();
            $table->string('Email')->unique();
            $table->string('Password', 191)->nullable();
            $table->string('Phone', 191)->nullable();
            $table->string('Crnumber', 191)->nullable();
            $table->string('City', 191)->nullable();
            $table->string('Countrycode', 191)->nullable();
            //$table->string('Status', 191)->nullable();
            $table->boolean('Status')->default(0);
            $table->string('Vat', 191)->nullable();
            $table->text('Regcertificate');
            $table->text('Logo')->nullable();
            $table->text('Comcerregister')->nullable();
            $table->text('Healthlicence')->nullable();
            $table->text('Regcertificate_url')->nullable();
            $table->text('Logo_url')->nullable();
            $table->text('Comcerregister_url')->nullable();
            $table->text('Healthlicence_url')->nullable();
            $table->string('Typeofservice', 191)->nullable();
            $table->string('Financialshare', 191)->nullable();
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
        Schema::dropIfExists('serviceprovider');
    }
}
