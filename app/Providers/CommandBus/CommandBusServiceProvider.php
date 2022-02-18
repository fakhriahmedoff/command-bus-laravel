<?php

namespace App\Providers\CommandBus;

use Illuminate\Support\ServiceProvider;
use Rosamarsky\CommandBus\Container;
use Rosamarsky\CommandBus\Inflector;
use Rosamarsky\CommandBus\LaravelContainer;

class CommandBusServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(Container::class, LaravelContainer::class);
        $this->app->bind(Inflector::class, NameInflector::class);
    }

}
