<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Carbon\Carbon;
use App\Comment;
use App\Post;
use Session;
use Image;

class PostController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        // create a variable and store all of our blog posts in it
        $posts = Post::orderBy('id', 'desc')->paginate(20);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create'); //shows a form page
    }

    public function store(Request $request)
    {
      // validate the data
      $validatedData = $request ->validate([
          'title' => 'required|unique:posts|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts',
          'post' => 'required',
          'blog_image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:20000' //max file size of 8MB
        ],
          $messages = [
            'title.required' => 'A title is required.',
            'title.unique' => 'This title has already been used.',
            'title.max' => 'This title is too long!',
            'slug.required' => 'A slug is required!',
            'slug.alpha-dash' => 'Use only hyphens between words!',
            'slug.min' => 'Minimum number of characters is 5!',
            'slug.max' => 'Maximum number of characters is 255!',
            'slug.unique' => 'This slug has already been used.',
            'post.required' => 'Don\'t leave without telling your fans something...anything!',
            'blog_image.image' => 'This is not an image!',
            'blog_image.mimes' => 'File type must be JPEG, PNG, JPG, GIF or SVG',
            'blog_image.max' => 'Maximum file size is !',
        ]);

        // store in database
        $post = new Post();
        $post -> title = $request -> input('title');
        $post -> slug = $request -> input('slug');
        $post -> post = $request -> input('post');
        $post -> image = $request ->input('blog_image');
        $post -> created_at = Carbon::now();
        $post -> updated_at = Carbon::now();

        // check for and save the image to local file
        if($request->hasFile('blog_image')) {
          $image = $request->file('blog_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          $s3Path = secure_asset('images/' . $filename);

          // resize uploaded image
          Image::make($image)->resize(300, null, function ($constraint){
            $constraint->aspectRatio();
            })->save($location);

            // $public = Storage::disk('public')->put($location, $filename);
            // $post-> image = $public;

            $s3 = Storage::disk('s3')->put($s3Path, $filename, 'public');
            $post-> image = $s3;
            $post-> image = $filename; //saves filename for retrieval of image

        }

            $post -> save();

        Session::flash('success', 'The blog post was saved successfully!');
        // redirect to another
        return redirect()->route('posts.show', $post -> slug);

    }

    public function show($id)
    {
        // call function in Post model
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);

    }


    public function edit($id)
    {
        // find post in database and save it as variable
        $post = Post::find($id);
        // return the view and pas in the var we previously created
        return view('posts.edit', ['post' => $post]);
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

      $post = Post::find($id);
      $oldFilename = $post -> image;

      $validatedData = $request ->validate([
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255',
          'post' => 'required',
          'blog_image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:20000' //max file size of 8MB
        ],
          $messages = [
            'title.required' => 'A title is required.',
            // 'title.unique' => 'This title has already been used.',
            'title.max' => 'This title is too long!',
            'slug.required' => 'A slug is required!',
            'slug.alpha-dash' => 'Use only hyphens between words!',
            'slug.min' => 'Minimum number of characters is 5!',
            'slug.max' => 'Maximum number of characters is 255!',
            // 'slug.unique' => 'This slug has already been used.',
            'post.required' => 'Don\'t leave without telling your fans something...anything!',
            'blog_image.image' => 'This is not an image!',
            'blog_image.mimes' => 'File type must be JPEG, PNG, JPG, GIF or SVG',
            'blog_image.max' => 'Maximum file size is !',
        ]);

        $post = $request->all(); // this retrieve the new input information

        if($request->hasFile('blog_image')){
          //add new photo
          $newImage = $request->file('blog_image');
          $newFilename = time() . '.' . $newImage->getClientOriginalExtension();
          $location = public_path('images/' . $newFilename);
          $filePath = public_path('images/');
          Image::make($newImage)->resize(300, null, function ($constraint){
          $constraint->aspectRatio();
          })->save($location);

          // delete old image from local public folder
          if (Storage::exists(public_path('images/' . $oldFilename))){
              Storage::delete(public_path('images/' . $oldFilename));
              unlink(public_path('images/' . $oldFilename));
            }

          // delete old image from AWS storage
          if(Storage::disk('public')->exists($filePath . $oldFilename)) {
            Storage::disk('public')->delete($filePath . $oldFilename);
          }

        // save image to aws s3
          $public = Storage::disk('public')->put($filePath, $newImage);
          $post->newImage = $public;

      }
          $post->newImage = $filename;
          $post -> save();

        Session::flash('success', 'This post was successfully updated and saved.');
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
      $post = Post::findOrFail($id);


        // if(file_exists(public_path('assets/images/blogImages/' . $filename))){
        //   $filename = delete();
        //   $s3 = new S3(awsAccessKey, awsSecretKey);
        //   $s3->deleteObject("bucketname", filename);
        // }

      $post -> delete();

      // Session::flash('success', 'Post was deleted successfully.');
      return redirect()->route('posts.index')->with('success', 'Post was deleted successfully.');
    }
}
