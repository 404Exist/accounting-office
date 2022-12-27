<?php

namespace Modules\Admin\Repositories\Interfaces;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Modules\Admin\Http\Requests\Auth\AdminLoginRequest;
use Modules\Admin\Http\Requests\Auth\AdminResetPasswordRequest;

interface AuthenticateInterface
{
    public function login(AdminLoginRequest $request): ValidationException|bool;

    public function logout(Request $request): void;

    public function sendResetLinkEmail(Request $request): string;

    public function resetPassword(AdminResetPasswordRequest $user): mixed;

    public function setUsername($username): self;

    public function setPassword($password): self;

    public function setGuard($guard): self;

    public function setBroker($broker): self;
}
