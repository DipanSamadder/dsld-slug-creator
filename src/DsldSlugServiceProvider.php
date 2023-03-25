<?php

namespace Dsld\LaravelSlugCreator;
use Illuminate\Support\ServiceProvider;

class DsldSlugServiceProvider extends ServiceProvider{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('laravel-slug-creator', function($app){
            return new Dsld\LaravelSlugCreator\DsldSlug();
        });
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-creator-slug.php', 'laravel-creator-slug'
        );
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/laravel-creator-slug.php' => config_path('laravel-creator-slug.php'),
        ]);
    }
}