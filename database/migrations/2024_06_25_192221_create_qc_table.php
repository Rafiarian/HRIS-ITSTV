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
        Schema::create('qc', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jobId')->constrained('job');
            $table->foreignId('assist_script')->constrained('users');
            $table->foreignId('assist_editor')->constrained('users');
            $table->foreignId('assist_cam')->constrained('users');
            $table->foreignId('qc_script')->constrained('users');
            $table->foreignId('qc_cam')->constrained('users');
            $table->string('bgm_source');
            $table->string('bgm_check');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qc');
    }
};
