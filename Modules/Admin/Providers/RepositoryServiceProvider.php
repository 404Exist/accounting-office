<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Repositories\Auth\AuthenticateRepository;
use Modules\Admin\Repositories\Interfaces\AuthenticateInterface;
use Modules\Admin\Repositories\Interfaces\PageImagessInterface;
use Modules\Admin\Repositories\Interfaces\TeamMembersInterface;
use Modules\Admin\Repositories\Interfaces\TextsInterface;
use Modules\Admin\Repositories\PageImagessRepository;
use Modules\Admin\Repositories\TeamMembersRepository;
use Modules\Admin\Repositories\TextsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AuthenticateInterface::class, AuthenticateRepository::class);
        $this->app->bind(TextsInterface::class, TextsRepository::class);
        $this->app->bind(PageImagessInterface::class, PageImagessRepository::class);
        $this->app->bind(TeamMembersInterface::class, TeamMembersRepository::class);
    }
}
