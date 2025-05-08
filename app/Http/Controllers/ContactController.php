<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUsJob;
use App\Mail\ContactUs;
use App\Mail\Enquiry;
use App\Models\Message as ModelMessage;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(){
        $toEmail = 'janedoe@gmail.com';

        Mail::to($toEmail)->send(new ContactUs());
        return 'Email has been sent';
    }

    public function show(){
        return view('home.contact');
    }

    public function sendEnquiry(Request $request){
        $toEmail = 'janedoe@gmail.com';
 
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'messageContent' => 'required|min:5'
        ]);
        // Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry($data));
        // dd('Mail sent');

        //store to database
        ModelMessage::create($data);

        $job = (new ContactUsJob($data));
        dispatch($job);
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
