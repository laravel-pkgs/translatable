<?php

namespace IICN\Translatable;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class TranslatableServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(Translatable::class, fn () => new Translatable());
        $this->app->bind('translatable', Translatable::class);


        Blueprint::macro('translations', function () {
            return $this->json('translations')->nullable();
        });

//        Factory::macro('translations', function (string|array $locales, mixed $value) {
//            return is_array($value)
//                ? array_combine((array)$locales, $value)
//                : array_fill_keys((array)$locales, $value);
//        });
    }
}
