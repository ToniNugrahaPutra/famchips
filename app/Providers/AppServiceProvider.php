<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route; 
use App\Models\Article;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Http\Responses\LoginResponse as CustomLoginResponse;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(LoginResponseContract::class, CustomLoginResponse::class);
    }



public function boot(): void
{
    Schema::defaultStringLength(191);
    Paginator::useBootstrap();

    // Custom route model binding Article berdasarkan slug
    Route::bind('article', function ($value) {
        return Article::where('slug', $value)->firstOrFail();
    });
}
}
