<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
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
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require base_path() . '/resources/macros/html.php';
    }
}
