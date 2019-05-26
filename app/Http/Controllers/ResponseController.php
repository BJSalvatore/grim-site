<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Collective\Html\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Email;
use Carbon\Carbon;
use App\Response;
use App\Message;
use App\User;
use Session;

class ResponseController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  // public function getResponse($id){
  //   // fetch from database based on $id
  //   $response = Response::where('id', '=', $id)->first();
  //   // return the view and pass in the post object
  //   return view('messages.single')->withResponse($response);
  // }



  public function index()
  {
    // create a variable and store all of our blog comments in it
    $responses = Response::orderBy('id', 'asc')->get();
    // // return a view and pass in the variable
    return view('responses.index', ['responses' => $responses]);
  }

  public function store(Request $request)
  {
    $message = Message::find($id);

    $validatedData = $request->validate([
     'response' => 'required|min:5|max:2000',
   ],
     $messages = [
         'response.required' => 'Did you forget something?',
         'response.min' => 'We know you have more to say. Your message must be longer',
         'response.max' => 'Wow! You have a lot to say! If it won\'t fit here, continue on another comment.',
   ]);

       $response = new Response();
       $response-> response = $request-> input('response');
       $response-> respondee = auth()->user() -> respondee;
       $response-> message() -> associate($message -> id);
       $response -> responded_on = Carbon::now();

       $response->save();

   }

   public function show($id)
   {
     $response = Response::find($id);

     return view ('messages.show', ['response' => $response]);

   }

}
