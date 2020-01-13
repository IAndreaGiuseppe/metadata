<?php

namespace Iag\Metadata;

use Illuminate\Support\ServiceProvider;

class MetadataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->configure();
    }

    /**
     * Bootstrap services.
     * 
     * @return void
     */
    public function boot(): void
    {
        $this->registerResources();
        $this->registerPublishing();
    }

    /**
     * Setup the configuration for Metadata
     *
     * @return void
     */
    protected function configure(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/metadata.php', 'metadata'
        );
    }

    /**
     * Register the package resources
     * 
     * @return void
     */
    protected function registerResources(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'metadata');
    }

    /**
     * Register the package's publishable resources
     * 
     * @return void
     */
    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/metadata.php' => $this->app->configPath('metadata.php')
            ], 'metadata-configs');
        }
    }
}
