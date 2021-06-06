<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmailnotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'about', 'contact', 'services', 'mail']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about-us');
    }

    public function contact()
    {

        return view('contact-us');
    }

    public function services()
    {
        return view('services');
    }
    public function mail(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'message' => 'required',

        ]);


        Mail::to(env('MAIL_TO_ADDRESS'))
            ->send(new Sendmailnotification($data));

        return redirect('contact')->with('message', 'Sent Successfully');
    }
}
