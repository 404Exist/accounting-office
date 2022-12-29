<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function index()
    {
        return view('admin::admin.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:admins,email,' . admin()->id]
        ]);

        admin()->update([
            'email' => $request->email,
            'password' => isset($request->password) ? Hash::make($request->password) : admin()->password,
        ]);

        return back()->with('success', "Admin Credentials have been updated successfully!");
    }
}
