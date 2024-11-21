<?php

namespace App\Providers;

use App\Repositories\Contracts\AboutRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\Contracts\ProgramRepositoryInterface;
use App\Repositories\Contracts\SliderRepositoryInterface;
use App\Repositories\Eloquent\AboutRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\PostRepository;
use App\Repositories\Eloquent\SliderRepository;
use App\Repositories\Eloquent\ProgramRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(SliderRepositoryInterface::class, SliderRepository::class);
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
        $this->app->bind(ProgramRepositoryInterface::class, ProgramRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
