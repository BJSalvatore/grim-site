<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Collective\Html\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Comment;
use App\Post;
use App\User;
use Session;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // create a variable and store all of our blog comments in it
      $comments = Comment::orderBy('id', 'asc')->paginate(5);
      // // return a view and pass in the variable
      return view('comments.index', ['comments', $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request, $post_id)
     {
       $post = Post::find($post_id);

       $validatedData = $request->validate([
        'comment' => 'required|min:5|max:2000|unique:comments',
      ],
        $messages = [
            // 'username.max' => 'How can you remember all of that?! Shorten this up, please.',
            // 'username.required' => 'Don\'t you want everyone to know who posted this?',
            'comment.required' => 'Don\'t leave without telling us how you feel!',
            'comment.min' => 'We know you have more to say. Your message must be longer',
            'comment.max' => 'Wow! You have a lot to say! If it won\'t fit here, continue on another comment.',
            'comment.unique' => 'Be original! Someone has already used this comment.'
      ]);

          $comment = new Comment();
          $comment-> username = auth()->user() -> username;
          $comment-> comment = $request-> comment;
          $comment-> post_id = post() -> asssociate($post->id);
          $comment-> approved = true;
          $comment -> approved_at = Carbon::now();

          $comment->save();

          Session::flash('success', 'Comment was added successfully!');

          return redirect()->view('pages.single', [$post => id]);
      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $comment = Comment::find($id);

      return view('comments.show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->foreign('post_id')
          ->references('id')->on('posts')
          ->onDelete('cascade');
        $comment -> delete();
    }
}
