<?php

namespace Jalinmodule\Barang;

use Illuminate\Support\ServiceProvider;

class BarangServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/inventaris/barang'),
        ]);
        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ],'migrations');
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('barang.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/routes.php';
        $this->app->make('Jalinmodule\Barang\Controllers\BarangController');
        $this->app->make('Jalinmodule\Barang\Controllers\KategoriController');
    }
}
