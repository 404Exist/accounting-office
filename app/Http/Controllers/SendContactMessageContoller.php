<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactMessageRequest;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class SendContactMessageContoller extends Controller
{
    public function __invoke(SendContactMessageRequest $request)
    {
        try {
            Notification::route('mail', str_replace(' ', '', getKeySetting('mail')))
                ->notify(new ContactNotification((object) $request->validated()));

            return back()->with('success', getKeyText('contact_email_sent_sucessfully'));
        } catch (\Exception $error) {
            return back()->with('error', getKeyText('contact_email_not_sent'));
        }
    }
}
