<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEnquiryMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email to admin
        Mail::to('sales@arabiangratings.com')
            ->send(new ContactEnquiryMail($validated));

        return back()->with('success', 'Thank you! We will contact you shortly.');
    }
}
