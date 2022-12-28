<?php

namespace Modules\Admin\Repositories\Auth;

use Illuminate\Contracts\Auth\Factory;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Password;
use Modules\Admin\Repositories\Interfaces\AuthenticateInterface;

class AuthenticateRepository implements AuthenticateInterface
{
    use Auth;
    use PasswordReset;
    use ThrottlesLogins;

    protected string $username = "email";

    protected string $password = "password";

    protected string $guard = "admin";

    protected string $broker = "admins";

    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setGuard($guard): self
    {
        $this->guard = $guard;

        return $this;
    }

    public function setBroker($broker): self
    {
        $this->broker = $broker;

        return $this;
    }

    protected function username(): string
    {
        return $this->username;
    }

    protected function password(): string
    {
        return $this->password;
    }

    protected function auth(): Factory|Guard|StatefulGuard
    {
        return auth($this->guard);
    }

    protected function broker(): PasswordBroker
    {
        return Password::broker($this->broker);
    }
}
