<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
    // create a variable and store all of the messages in it
    $message = Message::orderBy('timestamps', 'asc')->paginate(5);
    // return a view and pass in the variable
    return view('messages.index')->with('messages', $messages);
    }

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function create()
    {
        return view('pages.contact'); //shows comment page
    }

    public function store(Request $request)
    {
        // validate the data
      $validatedData = $request ->validate([
          'email' => 'required|max:255',
          'name' => 'required|min:10|max:255',
          'message' => 'required'
        ]);
        // store in database
        $message = new Message;
        $message -> email = $request -> input('email');
        $message -> name = $request -> input('name');
        $message -> message = $request -> input('message');
        $message -> save();
        Session::flash('success', 'Your message has been successfully sent!');
        // redirect to another
        return redirect()->route('/home', $message ->created_at);
        // return view('index', compact('post'));
    }


}
