<?php

namespace IICN\Translatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IICN\Translatable\Translatable
 *
 * @method static fallback(?string $fallbackLocale = null, ?bool $fallbackAny = false, $missingKeyCallback = null)
 */
class Translatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translatable';
    }
}
