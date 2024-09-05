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
        Schema::create('attachments', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('record_id')->nullable();
            $table->string('filename')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamp('CreatedAt')->useCurrent();
            $table->timestamps();

    $table->foreign('record_id')->references('id')->on('alldoctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attachments', function (Blueprint $table) {
            //
        });
    }
};
