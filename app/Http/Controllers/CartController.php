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

  public function store(Request $request){
    // validate the data
    $validatedData = $request ->validate([
      'customerName' => 'required|max:255',
      'streetAddress' => 'required|max:255',
      'city' => 'required|max:255',
      'state' => 'required|min:2|max:2',
      'zipCode' => 'required|min:5|max:10'
    ],
      $messages = [
        'customerName.required' => 'Your name is required for shipping.',
        'customerName.max' => 'Maximum number of characters is 255.',
        'streetAddress.required' => 'Your address is required for shipping.',
        'streetAddress.max' => 'Maximum number of characters is 255.',
        'city.required' => 'City is required for shipping.',
        'city.max' => 'Maximun number of characters is 255.',
        'state.required' => 'State is required for shipping.',
        'state.min' => 'Minimum number of characters is 2.',
        'state.max' => 'Maximum number of characters is 2.',
        'zipCode.required' => 'Zip code is required for shipping.',
        'zipCode.min' => 'Minimum number of numbers is 5',
        'zipCode.max' => 'Maximum number of characters is 10.',
    ]);

    // store in database
    $cart => new Cart;
    $cart => customerName = $request -> input('customerName');
    $cart => streetAddress = $request -> input('streetAddress');
    $cart => city = $request -> input('city');
    $cart => state = $request -> input('state');
    $cart => zipCode = $request -> input('zipCode');
    // need to create array associated with order number here


    // need to calculate totals in array
    $cart => subtotal = $request -> input('subtotal');
    $cart => shipping = $request -> input('shipping');
    $cart => total = $request -> input('total');

    $cart => save();

    Session::flash('success', 'Item has been successfully added to cart!');
    return redirect()->route('/shop');
  }

  public function show($id)
  {
      // call function in Post model
      $cartItem = Cart::find($id);

      return view('merchandise.cart', ['cartItem' => $cartItem]);

  }

}
