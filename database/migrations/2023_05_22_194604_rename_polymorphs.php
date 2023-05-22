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
        Schema::rename('parkable', 'parkables');
        Schema::rename('userable', 'userables');
        Schema::rename('breedable', 'breedables');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('parkables', 'parkable');
        Schema::rename('userables', 'userable');
        Schema::rename('breedables', 'breedable');
    }
};
