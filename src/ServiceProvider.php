<?php

namespace Sirius\Provider;

use function Sirius\Support\collect;

class ServiceProvider implements \Sirius\Provider\Contracts\ServiceProvider
{
    /**
     * The container instance.
     *
     * @var \Sirius\Container\Contracts\Container
     */
    protected $container;

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Create a new service provider instance.
     *
     * @param  \Sirius\Container\Contracts\Container $container
     *
     * @return void
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function register() {
      // TODO: Implement register() method.
    }

    public function boot() {
      // TODO: Implement boot() method.
    }

  /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Get the events that trigger this service provider to register.
     *
     * @return array
     */
    public function when()
    {
        return [];
    }

    /**
     * Determine if the provider is deferred.
     *
     * @return bool
     */
    public function isDeferred()
    {
        return $this->defer;
    }
}
