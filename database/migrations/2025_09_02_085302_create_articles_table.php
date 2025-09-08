<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');             // Judul artikel
            $table->enum('status', ['draft', 'published'])->default('draft'); // Status
            $table->longText('description');     // Isi artikel
            $table->string('image')->nullable(); // Gambar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
