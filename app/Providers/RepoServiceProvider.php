<?php

namespace App\Providers;

use App\Repository\CustomerRepository;
use App\Repository\CustomerRepositoryImplement;
use App\Service\CustomerServiceImplement;
use App\Service\CustomerService;
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
        $this->app->bind(CustomerRepository::class,CustomerRepositoryImplement::class);
        $this->app->bind(CustomerService::class,CustomerServiceImplement::class);
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
