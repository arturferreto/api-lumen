<?php

namespace App\Providers;

use App\Models\{Author, ImageNews, News};
use App\Repositories\Specific\{AuthorRepository, ImageNewsRepository, NewsRepository};
use App\Services\Specific\{AuthorService, ImageNewsService, NewsService};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthorService::class, function ($app) {
            return new AuthorService(new AuthorRepository(new Author()));
        });

        $this->app->bind(NewsService::class, function ($app) {
            return new NewsService(new NewsRepository(new News()));
        });

        $this->app->bind(ImageNewsService::class, function ($app) {
            return new ImageNewsService(new ImageNewsRepository(new ImageNews()));
        });
    }
}
