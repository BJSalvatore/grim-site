<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use APP\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
=======
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['member', 'manager']);

        return view('home');
    }

     // public function adminViews(Request $request)
     // {
     //   $request->user()->authorizeRoles('manager');
     //   return view(‘some.view’);
     // }
>>>>>>> 163501fc4233c8188332c062434bb008fc37d5ce

     public function index()
   {
       return view('/home');
   }
}
