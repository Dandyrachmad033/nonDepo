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
        Schema::create('m_sub_modules', function (Blueprint $table) {
            $table->id('sub_id');
            $table->string('name_sub');
            $table->string('link_suub')->default('#');
            $table->foreignId('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_sub_modules');
    }
};
