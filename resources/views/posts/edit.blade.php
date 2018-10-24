@section('title', '| Edit Post')

@extends('layouts.app')
@include('inc._navbar')

@section('content')

<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-4">
    @include('inc._sidebar')</div>
    <div class="col-lg-8">
      <div class="form-group">
        <form id="editForm" role="form" method="PUT" action="{{ route('posts.update', $post -> id) }}">
            @csrf
            <label class="mt-1" for="title">Title</label>
            <input class="form-control form-control-lg" id="title" name='title' value="{{ $post -> title}}" type="text"></input>
            <label class="mt-1" for="slug">Slug</label>
            <input class="form-control form-control-lg" id="slug" name='slug' value="{{ $post -> slug}}" type="text"></input>
            <label class="mt-1" for="post">Blog Post</label>
            <input class="form-control" style="word-wrap" id="editpost" name='post' value="{{ wordwrap($post -> post, 50, "\n", true) }}" type="text"></input>
            <div class="container bg-secondary mt-4 p-4">
              <h5>Created on:</h5>
              <p>{{ $post -> created_at }}</p>
              <h5>Updated on:</h5>
              <p>{{ $post -> updated_at }}</p>
            </div>
          <a href="{{ route('posts.show', $post -> id)}}" class="btn btn-block btn-danger m-1">Cancel</a>
          <button type="submit" class="btn btn-success btn-block">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
