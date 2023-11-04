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
        Schema::create('m_modules', function (Blueprint $table) {
            $table->id('module_id');
            $table->string('module_name');
            $table->text('module_desc');
            $table->string('module_path');
            $table->string('module_script');
            $table->string('module_parent');
            $table->string('module_order');
            $table->string('module_icon');
            $table->string('module_status');
            $table->string('module_link')->default('#');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
