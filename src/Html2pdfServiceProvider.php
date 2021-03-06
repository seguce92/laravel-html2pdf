<?php

namespace NahidulHasan\Html2pdf;

use Illuminate\Support\ServiceProvider;

class Html2pdfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       // include __DIR__.'/routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('NahidulHasan\Html2pdf\Pdf');

        $this->app->singleton('pdf', function($app) {
            return new Pdf();
        });

        $this->app->alias('pdf', Pdf::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'pdf',
        ];
    }
}
