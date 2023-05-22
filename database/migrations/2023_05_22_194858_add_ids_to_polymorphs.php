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
        Schema::table('parkables', function (Blueprint $table) {
            $table->integer('park_id');
        });
        Schema::table('userables', function (Blueprint $table) {
            $table->integer('user_id');
        });
        Schema::table('breedables', function (Blueprint $table) {
            $table->integer('breed_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parkables', function (Blueprint $table) {
            $table->dropColumn('park_id');
        });
        Schema::table('userables', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('breedables', function (Blueprint $table) {
            $table->dropColumn('breed_id');
        });
    }
};
