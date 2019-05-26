<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Carbon\Carbon;
use App\Message;
use App\Response;
use Session;

class MessageController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(){
    // create a variable and store all of the messages in it
    $messages = Message::orderBy('id', 'desc')->paginate(5);
    // return a view and pass in the variable
    return view('messages.index', ['messages' => $messages]);
    }

  public function create()
    {
        return view('messages.create'); //shows comment page
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
        $message = new Message();
        $message -> email = $request -> input('email');
        $message -> username = auth()->user() -> username;
        $message -> name = $request -> input('name');
        $message -> message = $request -> input('message');
        $message -> created_at = Carbon::now();

        $message -> save();

        if (auth()->user()){
          return back()->with('success', 'Your message was sent successfully!');
        }else{
          Session::flash('danger', 'You  must be registered and login to send a message!');
          return redirect()->route('login');
          }

    }


    public function show($id){
      $message = Message::find($id);
      return view('messages.show', ['message' => $message]);

    }

    public function destroy($id){
      $message = Message::findOrFail($id);
      $message -> delete();

      Session::flash('success', 'The message has been successfully deleted!');
      // redirect to another
      return redirect()->route('home');
    }


}
