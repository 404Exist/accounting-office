<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactMessageRequest;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class SendContactMessageContoller extends Controller
{
    public function __invoke(SendContactMessageRequest $request)
    {
        // $image = request()->file('file');
        // $webp = (string) \Intervention\Image\Facades\Image::make($image->getRealPath())->encode('webp');
        // $image_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        // Storage::disk('public')->put("admin/pages/$image_name.webp", $webp);
        Notification::route('mail', str_replace(' ', '', getSetting('mail')))
            ->notify(new ContactNotification((object) $request->validated()));

        return back()->with('success', getText('contact_email_sent_sucessfully'));
    }
}
