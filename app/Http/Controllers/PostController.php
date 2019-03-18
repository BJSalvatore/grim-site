<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Post;
use Session;
use Image;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all of our blog posts in it
        $posts = Post::orderBy('id', 'asc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create'); //shows a form page
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
          'title' => 'required|unique:posts|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts',
          'post' => 'required',
          'blog_image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:20000' //max file size of 8MB
        ],
          $messages = [
            'title.required' => 'A title is required.',
            'title.max' => 'This title is too long!',
            'post.required' => 'Don\'t leave without telling your fans something...anything!',
            'slug.required' => 'A slug is required!',
            'slug.alpha-dash' => 'Use only hyphens between words!',
            'slug.min' => 'Minimum number of characters is 5!',
            'slug.max' => 'Maximum number of characters is 255!',
            'blog_image.image' => 'This is not an image!',
            'blog_image.mimes' => 'File type must be JPEG, PNG, JPG, GIF or SVG',
            'blog_image.max' => 'Maximum file size is !',
        ]);

        // store in database
        $post = new Post;
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
          $location = public_path('assets/images/blogImages/' . $filename);
          $filePath = '' . $filename;
          // resize uploaded image
          Image::make($image)->resize(300, null, function ($constraint){
            $constraint->aspectRatio();
            })->save($location);

          // save image to aws s3
            $s3 = Storage::disk('s3')->put($filePath, $image);
            $post->image = $s3;
        }

        $post->image = $filename; //saves filename for retrieval of image

        $post -> save();

        Session::flash('success', 'The blog post was saved successfully!');
        // redirect to another
        return redirect()->route('posts.show', $post ->id);

    }

    // public static function getImage (Request $filePath)
    // {
    //   return $filePath;
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // call function in Post model
        $post = Post::find($id);
        return view('posts.show')->withPost($post);

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
        $post = Post::find($id);
        // return the view and pas in the var we previously created
        return view('posts.edit')->withPost($post);
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

        if($request -> input('slug') == $post -> slug) {
          $validateData = $request -> validate([
          'title' => 'required|unique:posts|max:255',
          'post' => 'required'
        ]);
        }else{
        // validate the database
          $validatedData -> $request ->validate([
            'title' => 'required|unique:posts|max:255',
            'slug' => "required|alpha_dash|min:5|max:255|unique:posts',$id",
            'post' => 'required',
            'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8192',
          ]);

        $post = Post::find($id);
        $post -> title = $request -> input('title');
        $post -> slug = $request -> input('slug');
        $post -> post = $request -> input('post');
        $post -> image = $request -> input('blog_image');

        if($request->hasFile('blog_image')){
          //add new photo
          $image = $request->file('blog_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('assets/images/blogImages/' . $filename);
          Image::make($image)->resize(300, null, function ($constraint){
            $constraint->aspectRatio();
          })->save($location);

          $image->move($location, $filename);
          //update database with new photo
          $oldFilename = $post->image; //grabs old filename

          // delete old photo
          // Storage::delete($oldFilename);
         File::delete(public_path('assets/images/blogImages/' . $oldFilename));

          $post->image = $location . '/' . $filename; //saves filename for retrieval of image

        }
        $post -> save();

        Session::flash('success', 'This post was successfully updated and saved.');

        return redirect()->route('posts.show', $post->id);
      }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      Storage::delete($post->image);
      $post -> delete();

      Session::flash('success', 'Post was deleted successfully.');

      return redirect()->route('posts.index');
    }
}
