<?php

namespace App\Providers;

use App\Models\Article;
use App\Observers\ArticleObserver;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Article::observe(ArticleObserver::class);

        DB::prohibitDestructiveCommands(
            app()->environment('production')
        );
        Model::shouldBeStrict(! app()->environment('production'));
        Model::automaticallyEagerLoadRelationships();
        Model::unguard();
    }
}
