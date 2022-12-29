<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin::settings');
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token', '_method') as $key => $value) {
            if ($value && $value != getSetting($key)) {
                Setting::where('key', $key)->first()?->update(['value' => $value]);
            }
        }

        return back()->with('success', "Site Settings have been updated successfully!");
    }
}
