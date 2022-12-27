<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Repositories\Auth\AuthenticateRepository;
use Modules\Admin\Repositories\Interfaces\AuthenticateInterface;
use Modules\Admin\Repositories\Interfaces\UsersInterface;
use Modules\Admin\Repositories\UsersRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AuthenticateInterface::class, AuthenticateRepository::class);
        $this->app->bind(UsersInterface::class, UsersRepository::class);
    }
}
