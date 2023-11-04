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
        Schema::create('pluggings', function (Blueprint $table) {
            $table->id('plug_id');
            $table->string('no_container');
            $table->string('set_temp');
            $table->string('sup_temp');
            $table->string('ret_temp');
            $table->text('remark');
            $table->string('time');
            $table->string('sup_end_temp');
            $table->string('ret_end_temp');
            $table->string('end_remark');
            $table->string('time_end');
            $table->string('alarm');
            $table->string('monitor');
            $table->string('shift');
            $table->text('photo');
            $table->text('photo_end');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pluggings');
    }
};
