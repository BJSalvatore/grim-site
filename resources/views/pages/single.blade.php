@extends('layouts.app')
@include('inc._navbar')

<!-- @section('title', "| {{$post->title}}") -->

@section('content')
<div class="row">
  <div class="col-lg-4">
    @include('inc._sidebar')</div>
    <div class="col-lg-8 p-4">
      <div class="post mt-3">
        @if($post->image)
          <img src="{{ asset('assets/images/blogImages/' . $post->image)}}" height="300" width="auto"> </img>
        @endif
          <h3>{{ $post -> title }}</h3>
          <p>{{ $post -> post }}</p>
          <!-- <p>{{ substr($post -> post, 0, 300) }}{{ strlen($post -> post) > 300 ? "..." : ""}}</p> -->
      </div>
      <hr>
      <div id="commentSection" class="row">
        <div class="col-lg-8">
          @foreach($post-> comments as $comment)
          <div id="comment">
              <p><strong>Name: </strong>{{$comment-> name}}</p>
              <p><strong>UserName: </strong>{{$comment-> username}}</p>
              <p><strong>Comment:</strong><br/>{{ $comment-> comment}}</p>
              <p>{{ date('D, d M y H:i:s', strtotime($comment -> created_at)) }}</p>
              <hr>
          </div>
          @endforeach
        </div>
      </div>
    <div id="comment-form">
      <form data-parsley-validate method="POST" action="{{ action('CommentsController@store', $post-> id, $post-> slug) }}">
        <div class="row">
          @csrf
            <div class="col-lg-8">
             <h6><font color="red">You must be registered and logged in to leave a comment.</font></h6>
             <label class="mt-1" for="name">Name</label>
             <h3> <input class="form-control" id="name" name="name" type="textarea" required maxlength="255"></input></h3>
           </div>
            <div class="col-lg-8">
             <label class="mt-1" for="username">UserName</label>
             <h3> <input class="form-control" id="username" name="username" type="textarea" required maxlength="255"></input></h3>
           </div>
              <div class="col-lg-8">
           <label class="mt-1" for="email">Email</label>
           <h3><input class="form-control" id="email" name="email" type="textarea" required maxlength="255"></input></h3>
         </div>
               <div class="col-lg-12">
             <label class="mt-1" for="comment">Comment</label>
             <textarea rows="10" class="form-control" id="comment" name="comment" type="textarea"required minlength="5" maxlength="2000"></textarea>
          </div>
        <div class="col-lg-8">
          <div class="button" style="margin-top: 10px;">
            <button type="submit" class="btn btn-secondary btn-md m-1">Submit Comment</button>
          </div>
        </div>
        </div>
      </form>
    </div>
      </div>
  </div>
@endsection
