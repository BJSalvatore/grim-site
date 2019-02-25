<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Post;
use Session;

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
        $posts = Post::orderBy('created_at', 'asc')->paginate(10);
        // return a view and pass in the variable
        return view('posts.index')->with('posts', $posts);
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
          'post' => 'required'
        ]);
        // store in database
        $post = new Post;
        $post -> title = $request -> input('title');
        $post -> slug = $request -> input('slug');
        $post -> post = $request -> input('post');
        $post -> save();
        Session::flash('success', 'The blog post was saved successfully!');
        // redirect to another
        return redirect()->route('posts.show', $post ->id);
        // return view('index', compact('post'));
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
        $validatedData = $request ->validate([
            'title' => 'required|unique:posts|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts',
            'post' => 'required'
          ]);
        }

        $post = Post::find($id);
        $post -> title = $request -> input('title');
        $post -> slug = $request -> input('slug');
        $post -> post = $request -> input('post');
        $post -> save();

        Session::flash('success', 'This post was successfully updated and saved.');

        return redirect()->route('posts.show', $post ->id);
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
      $post -> delete();

      Session::flash('success', 'Post was deleted successfully.');

      return redirect()->route('posts.index');
    }
}
