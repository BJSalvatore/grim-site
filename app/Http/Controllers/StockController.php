<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
  <?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Collective\Html\Eloquent;
  use Illuminate\Database\Eloquent\Model;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Database\Eloquent\Collection;
  use Illuminate\Support\Facades\Storage;
  use Carbon\Carbon;
  use App\Post;
  use Session;
  use Image;

  class PostController extends Controller
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
          $items = Stock::orderBy('id', 'desc')->paginate(20);

          return view('pages.inventory', ['items' => $items]);
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('stock.create'); //shows a form page
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
            'price' => 'required|integer|max:6',
            'description' => 'required|max:255',
            'size' => 'option|max:3|',
            'quantity' => 'required|integer',
            'merch_image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:20000' //max file size of 8MB
          ],
            $messages = [
              'itemName.required'-> 'This field cannot be empty!',
              'itemName.max' -> 'Maximum number of characters is 255.',
              'price.required' -> 'This field is required.',
              'price.integer' -> 'Please enter a number.',
              'price.max' -> 'Maximum number of characters is 6',
              'description.required' -> 'This field cannot be empty!',
              'description.max' -> 'Maximum number of characters is 255.',
              'size.option' -> 'This field is only required where necessary.',
              'size.max' -> 'Please enter S, M, LG, XL, XXL or XXXL',
              'quantity.required' -> 'This field is required!',
              'quantity.integer' -> 'This is not a number. Please enter a number.',
              'merch_image.image' -> 'This is not an image.',
              'merch_image.mimes' -> 'File must be jpeg, jpg, png, gif or svg.'.
              'merch_image.max' -> 'This file is too big. Please select a smaller file.'

          ]);

          // store in database
          $item = new Stock;
          $item -> itemName = $request -> input('itemName');
          $item => price = $request -> input('price');
          $item -> description = $request -> input('description');
          $item -> size = $request ->input(strtoUpper('size'));
          $item -> quantity = $request -> input('quantity');
          $item -> image = $request ->input('merch_image');
          $item -> user_id = auth()->user() -> username;
          $item -> created_at = Carbon::now();
          $item -> updated_at = Carbon::now();

          // check for and save the image to local file
          if($request->hasFile('merch_image')) {
            $image = $request->file('merch_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = storage_path('assets/images/merch/' . $filename);
            $filePath = '' . $filename;
            // resize uploaded image
            Image::make($image)->resize(300, null, function ($constraint){
              $constraint->aspectRatio();
              })->save($location);

              $public = Storage::disk('public')->put($filePath, $file);

          }
              // $post-> image = $filename; //saves filename for retrieval of image
              $item -> save();
          Session::flash('success', 'The blog post was saved successfully!');
          // redirect to another
          // return Response::download($location) -> redirect()->route('posts.show', $post ->id);
          return redirect()->route('inventory.show', $post ->id);

      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          // call function in Post model
          $items = Stock::find($id);

          return view('items.show', ['items' => $items]);

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
          return view('items.edit', ['item' => $item]);
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


        }
            $post->newImage = $filename;
            $post -> save();

          Session::flash('success', 'This item was successfully updated and saved.');
          return redirect()->route('posts.show', $post->id);
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

        // Session::flash('success', 'Post was deleted successfully.');
        return redirect()->route('merch.index')->with('success', 'Item was deleted successfully.');
      }
  }

}
