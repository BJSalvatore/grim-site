<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function getLogin(){
      return view('auth/login');
    }

    protected function authenticated($request, $user)
    {
      if($user-> role =='admin'){
          return redirect('add_blogpost');
      }else{
          return redirect('/');
      }
    }

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function password_verify($password, $hash){
      if (password_verify('$password', $hash)) {
      echo 'Password is valid!';
      } else {
      echo 'Invalid password.';
      }
    }

}
