<?php

namespace Codeat3\LaravelNovaLikeable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codeat3\LaravelNovaLikeable\Skeleton\SkeletonClass
 */
class LaravelNovaLikeableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-nova-likeable';
    }
}
