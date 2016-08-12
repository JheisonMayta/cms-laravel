<?php

namespace CMSlaravel\Providers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;
use CMSlaravel\Composers\CurrentUserComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot(Factory $factory)
  {
      $factory->composer('*', CurrentUserComposer::class);
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
      //
  }
}
