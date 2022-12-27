<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Auth\AdminLoginRequest;
use Modules\Admin\Http\Requests\Auth\AdminResetPasswordRequest;
use Modules\Admin\Repositories\Interfaces\AuthenticateInterface;

class AuthController extends Controller
{
    public function __construct(protected AuthenticateInterface $auth)
    {
    }

    public function showLoginForm()
    {
        return view('admin::auth.login');
    }

    public function showLinkRequestForm()
    {
        return view('admin::auth.passwords.email');
    }

    public function showResetForm(Request $request)
    {
        $token = $request->route()->parameter('token');

        return view('admin::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function login(AdminLoginRequest $request)
    {
        if ($this->auth->login($request)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return back();
    }

    public function logout(Request $request)
    {
        $this->auth->logout($request);

        return redirect()->route('admin.login');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $response = $this->auth->sendResetLinkEmail($request);

        return back()->with("status", trans($response));
    }

    public function reset(AdminResetPasswordRequest $request)
    {
        $response = $this->auth->resetPassword($request);

        return back()->with("status", trans($response));
    }
}
