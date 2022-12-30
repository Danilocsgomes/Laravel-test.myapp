<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('datetime', function($expression) {
            return "<?php echo Carbon\Carbon::create(($expression))->format('d/m/y H:1'); ?>";
        });

        Blade::if('validateString', function ($expression) {
            return gettype($expression) == 'string';
        });

        Blade::component(Alert::class,'alert');
    }
}
