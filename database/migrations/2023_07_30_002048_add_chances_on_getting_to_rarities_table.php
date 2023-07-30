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
        Schema::table('rarities', function (Blueprint $table) {
            $table->string('chances_on_getting')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rarities', function (Blueprint $table) {
            $table->dropColumn('chances_on_getting');
        });
    }
};
