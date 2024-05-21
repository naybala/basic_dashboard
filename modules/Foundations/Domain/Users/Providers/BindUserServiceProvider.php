<?php

namespace BasicDashboard\Foundations\Domain\Users\Providers;

use Illuminate\Support\ServiceProvider;
use BasicDashboard\Foundations\Domain\Users\Repositories\Eloquent\UserRepository;
use BasicDashboard\Foundations\Domain\Users\Repositories\UserRepositoryInterface;

class BindUserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind([
            UserRepositoryInterface::class,
            UserRepository::class
        ]);
    }
}
