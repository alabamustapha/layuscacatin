<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function contactPage(){
    	return view('contact');
    }

    public function sendContactMail(Request $request){

            Mail::to("layuscacatin1997@gmail.com")
            ->send(new ContactUs($request));

            return back()->with('message', "Message sent, thank you for contacting us");
            
    }
}
