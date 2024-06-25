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
        Schema::create('userjob', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->constrained('users');
            $table->string('jobRole')->constrained('jobcatalog');
            $table->string('jobId')->constrained('job')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userjob');
    }
};
