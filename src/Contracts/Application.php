<?php

namespace Sirius\Provider\Contracts;

use Sirius\Container\Contracts\Container;

interface Application extends Container
{
    /**
     * Register all of the configured providers.
     *
     * @return void
     */
    public function registerConfiguredProviders();

    /**
     * Register a service provider with the application.
     *
     * @param  \Sirius\Provider\ServiceProvider|string  $provider
     * @param  array  $options
     * @param  bool   $force
     *
     * @return \Sirius\Provider\ServiceProvider
     */
    public function register($provider, $options = [], $force = false);

    /**
     * Register a deferred provider and service.
     *
     * @param  string  $provider
     * @param  string|null  $service
     * @return void
     */
    public function registerDeferredProvider($provider, $service = null);

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot();

    /**
     * Register a new boot listener.
     *
     * @param  mixed  $callback
     * @return void
     */
    public function booting($callback);

    /**
     * Register a new "booted" listener.
     *
     * @param  mixed  $callback
     * @return void
     */
    public function booted($callback);

}
