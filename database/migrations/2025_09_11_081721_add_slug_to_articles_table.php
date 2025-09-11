<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Article;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (!Schema::hasColumn('articles', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }
        });

        // Isi slug otomatis dari title untuk data lama
        Article::whereNull('slug')->orWhere('slug', '')->get()->each(function ($article) {
            $article->slug = Str::slug($article->title) ?: uniqid();
            $article->save();
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (Schema::hasColumn('articles', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};
