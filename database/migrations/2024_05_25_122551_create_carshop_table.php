<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carshop', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Type');
            $table->string('Color');
            $table->string('Model');
            $table->string('Cost');
            $table->string('Year');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carshop');
    }
};
