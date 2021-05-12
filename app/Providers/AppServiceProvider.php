<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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

        if ($this->app->environment() == 'local') {
            $this->app->register(\Reliese\Coders\CodersServiceProvider::class);
        }
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        //collalex\resources\views\dashboard\template\lexicon.blade.php

        Paginator::useBootstrap();

        // Paginator::defaultView('dashboard.template.lexicon');

        // Paginator::defaultSimpleView('dashboard.template.lexicon');
    }
}
