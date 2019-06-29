<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){

      // fetch from database based on $slug
      $post = Post::where('slug', '=', $slug)->first();
      // return the view and pass in the post object
      return view('pages.single')->withPost($post);
    }

    public function index(){
    $posts = Post::orderBy('id', 'desc')->paginate(6);

    return view('pages.blog', ['posts' => $posts]);
    }

    public function show($id)
    {
        // call function in Post model
        $post = Post::find($id);
        return view('pages.blog', ['post' => $post]);

    }
}
