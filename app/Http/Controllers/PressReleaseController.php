<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Press;

class PressReleaseController extends Controller
{
  public function index()
  {
     $releases = PressRelease::all();

     return view('releases.index', ['releases' => $releases]);
   }

  public function store(Request $request)
  {
      // validate the data
    $validatedData = $request ->validate([
        'title' => 'required|unique:releases|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,give,svg|max:20000',
        'release_date' => 'required|max:255',
        'url' => 'required'
      ]);
      // store in database
      $release = new PressRelease;
      $release -> title = $request -> input('title');
      $release -> image = input('image');
      $release -> release_date = $request -> input('release_date');
      $release -> url = $request -> input('url');

      if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('pressReleases' . $filename);
        $s3Path = asset('press/') . $filename;

        // resize uploaded image
        Image::make($image)->resize(160, null, function ($constraint){
          $constraint->aspectRatio();
          })->save($location);

      // save image to public folder
      // $public = Storage::disk('public')->put($filepath, $image);
      // $release -> image = $filename;

      //save file to aws
      $s3 = Storage::disk('s3')->put($s3Path, $filename, 'public');
      $item -> image = $s3;


    }
      $post-> image = $filename; //saves filename for retrieval of image
      $release -> save();
    }
}
