<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('money_format', function ( $expression ) 
{       return "Rp <?php echo number_format($expression,0,'2','.'); ?>"; 
});
        Blade::directive('money', function ($money) {
            return "Rp <?php echo number_format($money, 2); ?>";
        });
    }
}
