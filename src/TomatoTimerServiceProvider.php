<?php

namespace TomatoPHP\TomatoTimer;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoAdmin\Facade\TomatoMenu;
use TomatoPHP\TomatoAdmin\Facade\TomatoSlot;
use TomatoPHP\TomatoAdmin\Services\Contracts\Menu;


class TomatoTimerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\TomatoTimer\Console\TomatoTimerInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-timer.php', 'tomato-timer');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-timer.php' => config_path('tomato-timer.php'),
        ], 'tomato-timer-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'tomato-timer-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-timer');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-timer'),
        ], 'tomato-timer-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-timer');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/tomato-timer'),
        ], 'tomato-timer-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        TomatoMenu::register([
            Menu::make()
                ->group(__('PMS'))
                ->label(__('Timer'))
                ->route('admin.timers.index')
                ->icon('bx bxs-time'),
        ]);

        TomatoSlot::navLeftSide('tomato-timer::timers.header');
    }
}
