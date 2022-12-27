<?php

namespace Modules\Admin\Repositories\Auth;

use Hash;
use Illuminate\Auth\Events\PasswordReset as PasswordResetEvent;
use Illuminate\Http\Request;

trait PasswordReset
{
    public function sendResetLinkEmail(Request $request): string
    {
        $request->validate([$this->username() => ['required']]);

        return $this->broker()->sendResetLink($request->only($this->username()));
    }

    public function resetPassword(Request $request): mixed
    {
        return $this->broker()->reset($request->validated(), function ($user, $password) {
            $user->password = Hash::make($password);

            $user->setRememberToken(str()->random(60));

            $user->save();

            event(new PasswordResetEvent($user));

            $this->auth()->login($user);
        });
    }
}
