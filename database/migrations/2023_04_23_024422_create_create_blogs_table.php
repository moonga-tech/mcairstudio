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
        Schema::create('create_blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('blog_title');
            $table->string('image');
            $table->longText('editor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_blogs');
    }
};
