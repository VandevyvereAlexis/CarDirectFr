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
        Schema::create('discussions', function (Blueprint $table)
        {
            $table->id();

            $table->foreignId('user1_id')->nullable()->constrained('users')->onDelete('set null'); // Initiateur
            $table->foreignId('user2_id')->nullable()->constrained('users')->onDelete('set null'); // Destinataire

            $table->unique(['user1_id', 'user2_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussions');
    }
};
