<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
    Schema::defaultStringLength(191);

    // configuração para alterar a resource das rotas
    // https://www.youtube.com/watch?v=_fDd_RKKWzk
    Route::resourceVerbs([
      'create' => 'novo',
      'edit' => 'editar'
    ]);
  }
}
