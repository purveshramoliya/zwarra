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
        Schema::create('generaljoinrequest', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname')->nullable();
            $table->string('Lastname')->nullable();
            $table->string('Email')->nullable();
            $table->integer('Phone')->nullable();
            $table->string('Country')->nullable();
            $table->string('City')->nullable();
            $table->boolean('Male')->default(0);
            $table->boolean('Female')->default(0);
            $table->boolean('Status')->default(0);
            $table->string('Type')->nullable();
            $table->boolean('Homevisitnparamedic')->default(0);
            $table->boolean('Telemedicinennurse')->default(0);
            $table->boolean('Allnlabtech')->default(0);
            $table->boolean('Othersnphysio')->default(0);
            $table->text('Description')->nullable();
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
        Schema::table('generaljoinrequest', function (Blueprint $table) {
            //
        });
    }
};
