<?php

namespace App\Http\Controllers;

use App;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Session;

class StockController extends Controller
{

      public function __construct()
      {
        $this->middleware('auth');
      }
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          // create a variable and store all of our blog posts in it
          $items = Stock::orderBy('itemName', 'asc')->get();
          // $items = DB::table('items')->get();

          return view('merchandise.index', compact('items'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('merchandise.create'); //shows a form page
      }
      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
        // validate the data
        $validatedData = $request ->validate([
            'itemName' => 'required|max:255',
            'price' => 'required|max:6',
            'description' => 'required|max:255',
            'size' => 'max:3',
            'quantity' => 'required',
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:20000' //max file size of 8MB
          ],
            $messages = [
              'itemName.required' => 'This field cannot be empty!',
              'itemName.max' => 'Maximum number of characters is 255.',
              'price.required' => 'This field is required.',
              'price.max' => 'Maximum number of characters is 6',
              'description.required' => 'This field cannot be empty!',
              'description.max' => 'Maximum number of characters is 255.',
              'size.max' => 'Please enter S, M, LG, XL, XXL or XXXL',
              'quantity.required' => 'This field is required!',
              'image.image' => 'This is not an image.',
              'image.mimes' => 'File must be jpeg, jpg, png, gif or svg.',
              'image.max' => 'This file is too big. Please select a smaller file.'

          ]);

          // store in database
          $item = new Stock;
          $item -> itemName = $request -> input('itemName');
          $item -> price = $request -> input('price');
          $item -> description = $request -> input('description');
          $item -> size = $request ->input('size');
          $item -> quantity = $request -> input('quantity');
          $item -> image = $request ->file('image');
          $item -> user_id = auth()->user() -> username;
          $item -> created_at = Carbon::now();
          $item -> updated_at = Carbon::now();

          $image = $request -> file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = storage_path('merch/' . $filename);
          $filePath = '' . $filename;

          $item-> image = $filename; //saves filename for retrieval of image
          $item -> save();

          Session::flash('success', 'The item was saved successfully!');
          // redirect to another
          return redirect()->route('items.index');
          }


      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {

          $item = Stock::find($id);

          return view('merchandise.show', ['item' => $item]);

      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          // find post in database and save it as variable
          $items = Stock::find($id);
          // return the view and pas in the var we previously created
          return view('merchandise.edit', ['item' => $item]);
      }
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, $id)
      {

        $item = Stock::find($id);
        $oldFilename = $item -> image;

        $validatedData = $request ->validate([

          ],
            $messages = [

          ]);

          $item = $request->all(); // this retrieve the new input information

            $item -> save();
            Session::flash('success', 'This item was successfully updated and saved.');
            return redirect()->route('items.index', $item->id);
        }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
        $item = Stock::findOrFail($id);

        $item -> delete();
        // Session::flash('success', 'Item was deleted successfully.');
        return redirect()->route('items.index')->with('success', "item was deleted successfully.");
      }
}
