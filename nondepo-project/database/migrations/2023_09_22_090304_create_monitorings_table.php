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
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id('id');
            $table->string('no_container');
            $table->string('set_temp');
            $table->string('sup_temp');
            $table->string('ret_temp');
            $table->text('remark');
            $table->string('time_monitoring');
            $table->string('alarm');
            $table->text('photo');
            $table->foreignId('plug_id');
            $table->string('monitor');
            $table->string('shift');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};
