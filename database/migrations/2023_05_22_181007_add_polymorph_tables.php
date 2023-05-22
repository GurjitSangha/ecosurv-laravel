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
        Schema::create('userable', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('userable_id');
            $table->string('userable_type');
        });
        Schema::create('parkable', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('parkable_id');
            $table->string('parkable_type');
        });
        Schema::create('breedable', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('breedable_id');
            $table->string('breedable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parks');
    }
};
