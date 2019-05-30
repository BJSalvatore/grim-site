<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

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
      'zipCode' => 'required|min:5|max:10',
      'phoneNumber' => 'required|min:10|max:13'
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
        'phoneNumber.required' => 'A contact number is required.',
        'phoneNumber.min' => 'Please make sure you have included your area code.',
        'phoneNumber.max' => 'You have entered too many characters.',
    ]);

    // store in database
    $cart => new Cart;
    $cart => id = $request -> input('id');
    $cart => customerName = $request -> input('customerName');
    $cart => streetAddress = $request -> input('streetAddress');
    $cart => city = $request -> input('city');
    $cart => state = $request -> input('state');
    $cart => zipCode = $request -> input('zipCode');
    $cart => phoneNumber = $request -> input('phoneNumber');
    $cart -> order = $request -> input(['itemName', 'size', 'quantity', 'price')];
    // need to calculate totals in array
    $cart => subtotal = $request -> input('subtotal');
    $cart => shipping = $request -> input('shipping');
    $cart => total = $request -> input('total');

    $cart => save();

    Session::flash('success', 'Item has been successfully added to cart!');
    return redirect()->route('/shop');
  }

  public function downloadPDF($id) {
    $cart = Cart::find($id);

    $pdf = PDF::loadView('pdf', compact('cart'));
    return $pdf->download('invoice.pdf');
  }

  public function show($id)
  {
      // call function in Post model
      $cart = Cart::find($id);
      return view('merchandise.cart', ['id' => $id]);

  }

}
