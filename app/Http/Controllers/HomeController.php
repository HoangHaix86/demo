<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //mail
    public function create()
    {
        return view('mails.email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $data = [
            'subject' =>  'Balcony Hotel - Booking',
            'Adult' => $request->Adult,
            'Children' => $request->Children,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'emailhotel' => 'kensuyu1@gmail.com',
            'content' => $request->content,
        ];
        Mail::send('mails.email-template', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject'], ['content'], ['name'], ['phone'], ['Adult'], ['Children'], ['checkin'], ['checkout']);
            $message->to($data['emailhotel'])
                ->subject($data['subject'], ['content'], ['name'], ['phone'], ['Cdult'], ['Children'], ['checkin'], ['checkout']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }

    public function home()
    {
        return view('home');
    }
}
