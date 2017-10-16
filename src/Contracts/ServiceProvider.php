<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/16
 * Time: 9:24
 */

namespace Sirius\Provider\Contracts;


interface ServiceProvider {

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register();

  /**
   * Bootstrap the services provided by the provider.
   *
   * @return void
   */
  public function boot();

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides();

  /**
   * Get the events that trigger this service provider to register.
   *
   * @return array
   */
  public function when();

  /**
   * Determine if the provider is deferred.
   *
   * @return bool
   */
  public function isDeferred();
}
