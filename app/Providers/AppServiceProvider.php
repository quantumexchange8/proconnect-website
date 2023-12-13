<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services. 
     * 
     * @return void
     */
    public function register()
    {
      //
    }

    /**
     * Bootstrap any application services.
     * 
     * @return void
     */
    public function boot()
    {
      if (App::environment('production')) {
        resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');
        $this->app['request']->server->set('HTTPS', true);
      } 

      Schema::defaultStringLength(191);
    }
}
