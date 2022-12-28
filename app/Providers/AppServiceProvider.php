<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Routing\Route;
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
        Blade::component(Alert::class, 'alert');

//        Route::ressourceVerbs([
//            'create' => 'cadastrar',
//            'edit' => 'editar'
//        ]);
    }
}
