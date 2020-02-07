<?php

namespace Codeat3\LaravelNovaLikeable;

use Codeat3\LaravelNovaLikeable\Resources\Like;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class LaravelNovaLikeableNovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the application's Nova resources.
     *
     * @return void
     */
    protected function resources()
    {
        Nova::resources([
            Like::class,
        ]);
    }
}
