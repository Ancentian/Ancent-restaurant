<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactValidation;
use Illuminate\Http\Request;
// start mailable
use Mail;
use App\Mail\ContactMail;
//end Mailable

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home/index');
    }

    public function aboutUs()
    {
        return view('home/about');
    }

    public function contactUs()
    {
        return view('home/contact');
    }

    public function restoBar()
    {
        return view('home/restoBar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeContact(ContactValidation $request)
    {
        $input = $request->all();
        Contact::create($input);

        // mailable
        Mail::to('marionmbithi@gmail.com')->send(new ContactMail($input));
        //End Mailable

        $request->session()->flash('Message', 'Your Message has been Successfully Received');
        return redirect(route('contactUs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
