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
              <p><strong>UserName: </strong>{{$comment-> username}}</p>
              <p><strong>Comment:</strong><br/>{{ $comment-> comment}}</p>
              <p>{{ date('D, d M y H:i:s', strtotime($comment -> created_at)) }}</p>
              <hr>
          </div>
          @endforeach
        </div>
      </div>
    <div id="comment-form">
      <form method="POST" action="{{ action('CommentsController@store', $post-> id) }}">
        <div class="row">
          @csrf
            <div class="col-lg-8">
             <label class="mt-1" for="username"><strong>UserName:</strong>
            </label>
            <h3> <input class="form-control" id="username" name="username" type="textarea" value=" {{ Auth::user() -> username }}"></input></h3>
           </div>
          <div class="col-lg-12">
             <label class="mt-1" for="comment"><strong>Comment:</strong></label>
             <textarea rows="10" class="form-control" id="comment" name="comment" type="textarea" value="{{ old('comment') }}"></textarea>
             @if($errors->has('comment'))
                <h5 class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('comment') }}</strong></h5>
              @endif
          </div>
        <!-- <div class="col-lg-8">
          <div class="button" style="margin-top: 5px;"> -->
            <button type="submit" class="btn btn-secondary btn-md m-1">Submit Comment</button>
          <!-- </div> -->
        </div>
      </form>
    </div>
</div>
@endsection
