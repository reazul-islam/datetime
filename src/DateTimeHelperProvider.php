<?php

namespace Reazul\Datetime;

use Illuminate\Support\ServiceProvider;

class DateTimeHelperProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Reazul\Datetime\DateTime');
        $this->app->alias('datetime', Reazul\Datetime\DateTimeFacade::class);

    }
}
