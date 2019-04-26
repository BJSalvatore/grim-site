<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartController extends Controller
{
  public function index()
  {
      // create a variable and store all of our blog posts in it
      $cartItems = Cart::orderBy('id', 'desc')->get();

      return view('merchandise.cart', ['cartItems' => $cartItems]);
  }

  public function show($id)
  {
      // call function in Post model
      $cartItem = Cart::find($id);

      return view('merchandise.cart', ['cartItem' => $cartItem]);

  }

}
