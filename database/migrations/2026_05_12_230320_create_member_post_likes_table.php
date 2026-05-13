<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('member_post_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('member_post_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            // Stop the same person liking the same post twice
            $table->unique(['user_id', 'member_post_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('member_post_likes');
    }
};