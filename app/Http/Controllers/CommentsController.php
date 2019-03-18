<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Collective\Html\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
      // return view('comments.index')->with('comments', $comments);
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
       // $user = User::find('$id');
       $comment = new Comment();
       $comment -> name = $request-> name;
       $comment-> username = $request-> username;
       $comment-> email = $request-> email;
       $comment-> comment = $request-> comment;
       $comment-> approved = true;
       $comment->post()->associate($post);
       $comment-> post_id = $request -> post_id;
       // $comment->user()->associate($user);

       $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|max:255',
        'email' => 'required|max:255',
        'comment' => 'required|min:5|max:2000',
      ],
        $messages = [
            'name.required' => 'What\'s your name?',
            'name.max' => 'Can you shorten your name a bit?',
            'username.required' => 'Don\'t you want everyone to know who posted this?',
            'username.max' => 'How can you remember all of that?! Shorten this up, please.',
            'email.required' => 'Your email is required',
            'email.max' => 'Your email is too long.',
            'comment.required' => 'Don\'t leave without telling us how you feel!',
            'comment.min' => 'We know you have more to say. Your message must be longer',
            'comment.max' => 'Wow! You have a lot to say! If it won\'t fit here, continue on another comment.'
      ]);

      // if($validation->fails()){
      //     return redirect()->back()->withInput();
      //   }else{
      //     return redirect()->route('pages.single', [$post -> slug]);
      //   }

      if(!auth()->check()){
        Session::flash('danger', 'You must register and be logged in to leave blog comments! Please login to continue.');
        return redirect()->route('login');

      } else {
        Session::flash('success', 'Comment was added successfully!');
        $comment->save();
        return redirect()->route('pages.single', [$post -> slug]);
        }

      // if(auth()->check()){
      //     $comment->save();
      //     Session::flash('success', 'Comment was added!');
      //    return redirect()->route('pages.single', [$post -> slug]);
      //   } else {
      //     Session::flash('danger', 'You must register and be logged in to leave blog comments! Please login to continue.');
      //    return redirect()->route('pages.single');
      //   }
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
