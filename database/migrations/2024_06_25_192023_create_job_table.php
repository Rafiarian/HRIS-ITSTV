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
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('jobTitle');
            $table->foreignId('uploaderId')->constrained('users');
            $table->foreignId('programId')->constrained('program');
            $table->string('youtubeLink');
            $table->string('scriptLink');
            $table->string('verifiedStat');
            $table->dateTime('uploadDate');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
