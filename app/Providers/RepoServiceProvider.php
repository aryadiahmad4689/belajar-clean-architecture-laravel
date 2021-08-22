<?php

namespace App\Providers;

use App\Repository\CustomerRepository;
use App\Repository\CustomerRepositoryImplement;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app::bind(
            CustomerRepository::class,
            CustomerRepositoryImplement::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
