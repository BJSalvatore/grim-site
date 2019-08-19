@section('title', '| Edit Post')

@extends('layouts.app')
@include('inc._navbar')
@section('content')
<div class="container-fluid">
    <div class="col-lg-8 offset-lg-2">
      <h3 class="mt-3" style="font-family: Freckle Face;">Edit Post</h3>
      <div class="form-group">
        <form id="editForm" method="POST" action="{{ action('PostController@update', $post->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div>
          @if($post->image)
            <img class="mt-1" src="{{ asset('images/' . $post->image)}}" height="300" width="auto"> </img>
          @endif
          </div>
          <div>
            <label class="mt-1" for="title">Title</label>
            <input class="form-control form-control-lg" id="title" name='title' value="{{ $post -> title }}" type="text"></input>
            <label class="mt-1" for="slug">Slug</label>
            <input class="form-control form-control-lg" id="slug" name='slug' value="{{ $post -> slug }}" type="text"></input>
            <label class="mt-1" for="post">Blog Post</label>
            <input class="form-control" style="word-wrap" id="editpost" name='post' value="{{ wordwrap($post -> post, 50, "\n", true) }}" type="text"></input>
            <label class="mb-1" for="blog_image">Update Image</label>
            <input class="form-control" id="blog_image" name="blog_image" value="{{ $post -> image }}" type="file"></input>
            <div class="container-fluid bg-secondary mt-4 p-4">
              <h5>Created on:</h5>
              <p>{{ $post -> created_at }}</p>
              <h5>Updated on:</h5>
              <p>{{ $post -> updated_at }}</p>
            </div>

            <button type="submit" class="btn btn-success btn-block mt-2">Save Changes</button>
            <a href="{{ route('posts.show', $post -> id) }}" class="btn btn-block btn-danger">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
