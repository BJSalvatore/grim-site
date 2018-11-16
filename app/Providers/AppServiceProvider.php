<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // eliminates mixed content error
              // if(env('APP_ENV') == 'production') {
              //   \URL::forceScheme('https');
              // }
              //
              // Schema::defaultStringLength(191);
      if($this->app->environment('production')) {
        URL::forceScheme('https');
      }
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
