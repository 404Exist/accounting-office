<?php

namespace Modules\Admin\Repositories\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

trait Auth
{
    public function login(Request $request): ValidationException|bool
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($attemptLogin = $this->attempt($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            $request->session()->regenerate();

            $this->clearLoginAttempts($request);
        }

        $this->incrementLoginAttempts($request);

        throw ValidationException::withMessages([$this->username() => [trans('auth.failed')]]);

        return $attemptLogin;
    }

    public function logout(Request $request): void
    {
        $this->auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }

    protected function attempt(Request $request): bool
    {
        return $this->auth()->attempt(
            $request->only($this->username(), $this->password()),
            $request->boolean('remember')
        );
    }
}
