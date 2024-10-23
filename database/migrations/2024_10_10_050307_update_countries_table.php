<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->renameColumn('name', 'Enname')->nullble(); // Rename 'name' to 'Enname'
            $table->text('coordinates')->nullable()->after('name');
            $table->string('Arname')->nullable()->after('name');                            // New field for Arabic name
            $table->string('shapeType')->nullable()->after('coordinates');                            // New field for Arabic name
        });
    }

    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->renameColumn('name', 'Enname')->nullble(); // Rename 'name' to 'Enname'
            $table->text('coordinates')->nullable()->after('name');
            $table->string('Arname')->nullable()->after('name'); 
            $table->string('shapeType')->nullable()->after('coordinates');                           // New field for Arabic name
        });
    }
};
