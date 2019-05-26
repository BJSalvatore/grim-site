<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function mail($id){

    //   return view('email.mail', ['message' => $message]);
    // }

    public function approval()
    {
        return view('approval');
    }


     public function index()
   {
       return view('/home');
   }
}
