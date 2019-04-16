<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._navbar')
@section('content')
<div class="row">
  <div class="col-lg-4">
    @include('inc._sidebar')</div>
      <div class="col-lg-5">
          <div class="post mt-3">
            @if($post -> image)
              <img src="{{ secure_asset('https://s3.amazonaws.com/grim-images/images/' . $post->image)}}" height="300" width="auto"> </img>
            @endif
              <h3>{{ $post -> title }}</h3>
              <p>{{ $post -> post}}</p>
          </div>
          <hr>
          <hr>
          <div id="comment" class="flex-container">
            <section class="content">
            @foreach($post-> comments as $comment)
                <p><strong>UserName: </strong>{{$comment-> username}}</p>
                <p><strong>Comment:</strong><br/>{{ $comment-> comment}}</p>
                <p>{{ date('D, d M y H:i:s', strtotime($comment -> created_at)) }}</p>
                <hr>
            @endforeach
              </section>
            </div>
      </div>
  <div class="col-lg-3">
      <div class="container bg-secondary mt-3 align-content-center justify-content-center">
        <div  id="postInfo" class="container p-4">
          <h5>URL:</h5>
          <a href="{{ url('single/'.$post -> slug)}}">{{ url('single/'.$post -> slug)}}</a> <!--appends slug to base url-->
          <h5>Created on:</h5>
          <p>{{ date('Y-m-d\ H:i:s', strtotime($post -> created_at)) }}</p>
          <h5>Updated on:</h5>
          <p>{{ $post -> updated_at }}</p>
        </div>
      </div>
    <form action id="editForm" method="POST" action="{{ route('posts.destroy', $post->id) }}" enctype="multipart/form-data">
      @csrf
      @method('DELETE')
    <div>
      <button type="submit" class="btn btn-block btn-danger m-1">Delete</a>
    </div>
    </form>
       <a href="{{ route('posts.edit', $post-> id) }}" class="btn btn-block btn-warning m-1" method="GET">Edit</form>
      <a href="{{ url('posts') }}" class="btn btn-block btn-primary m-1" method="GET">View All Posts</a>
  </div>
</div>

@endsection
