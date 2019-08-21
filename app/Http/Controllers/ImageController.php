<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;

class ImageController extends Controller
{

  public function store(Request $request){
    $validatedData = $request -> validate([
      'blog_image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:20000' //max file size of 8MB
     ],
     $messages = [
       'blog_image.image' => 'This is not an image!',
       'blog_image.mimes' => 'File type must be JPEG, PNG, JPG, GIF or SVG',
       'blog_image.max' => 'Maximum file size is !',
     ]);

     $image = new Image;

  // check for and save the image to local file
  if($request->hasFile('blog_image')) {
    $image -> image = $request -> input('blog_image');
    // $image = $request->file('blog_image');
    $filename = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('assets/images/blogImages/' . $filename);
    $filePath = asset('images/' . $filename;
    // resize uploaded image
    Image::make($image)->resize(300, null, function ($constraint){
      $constraint->aspectRatio();
      })->save($location);

  // save image to aws s3
      $s3 = Storage::disk('s3')->put($filePath, $image, 'public');
      $post -> image = $s3;
      }
      $post -> image = $filename; //saves filename for retrieval of image

      $post->save();
    }

  public static function getImage ($filePath)
    {
        if(Storage::exists($filePath))
        {
            return Storage::disk('s3')->get($filePath);
        }else
        {
            return 'No Image';
        }
    }
}
