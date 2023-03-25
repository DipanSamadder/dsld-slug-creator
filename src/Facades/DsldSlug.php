<?php

namespace Dsld\LaravelSlugCreator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dsld\LaravelSlugCreator\DsldSlug
*/

class DsldSlug extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-slug-creator';
    }
}