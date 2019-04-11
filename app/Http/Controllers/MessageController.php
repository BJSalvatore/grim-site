<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

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
          'email' => 'required|max:255|email',
          'name' => 'required|min:3|max:255',
          'message' => 'required'
        ],
          $messages = [
            'email.required' => 'This field cannot be empty!',
            'email.max' => 'Maximum number of characters is 255.',
            'email.email' => 'This is not a valide email address.',
            'name.required' => 'This field is required.',
            'name.min' => 'Minimum number of characters is 3.',
            'name.max' => 'Maximum number of characters is 255.',
            'message.required' => 'This field cannot be empty!'

          ]);


        // store in database
        $message = new Message;
        $message -> email = $request -> input('email');
        $message -> name = $request -> input('name');
        $message -> message = $request -> input('message');
        $message-> username = auth()->user() -> username;
        $message -> save();

        Session::flash('success', 'Your message has been successfully sent!');
        // redirect to another
        return redirect()->route('messages.show', $message -> id);

    }

    public function show($id){
      $message = Message::find($id);
      return view('messages.show', ['message' => $message]);

    }

    public function destroy($id){

    }


}
