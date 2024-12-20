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
            //
            $table->string('Gender')->nullable()->after('Healthcareid');
            $table->string('Estimated_time_for_a_service')->nullable()->after('Healthcareid');
            $table->string('Change_service_price')->nullable()->after('Healthcareid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subservices', function (Blueprint $table) {
            //
            $table->dropColumn('Gender');
            $table->dropColumn('Estimated_time_for_a_service');
            $table->dropColumn('Change_service_price');
            
        });
    }
};
