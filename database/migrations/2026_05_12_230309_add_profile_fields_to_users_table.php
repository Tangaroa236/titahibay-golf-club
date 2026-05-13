<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_photo')->nullable()->after('email');
            $table->text('bio')->nullable()->after('profile_photo');
            $table->decimal('handicap', 4, 1)->nullable()->after('bio');
            $table->integer('best_score')->nullable()->after('handicap');
            $table->integer('games_played')->default(0)->after('best_score');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['profile_photo', 'bio', 'handicap', 'best_score', 'games_played']);
        });
    }
};