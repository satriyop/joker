<?php

namespace Satriyop\Joker;

use Illuminate\Support\ServiceProvider;

class JokerServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('joker', function() {
            return new JokeFactory();
        });
    }
}
