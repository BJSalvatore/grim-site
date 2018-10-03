<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Create New Post')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-md-9">
      <h1>Enter New Blog Post</h1>
      <hr>
      <div class="form-group">
        <form method="POST" action="{{ route('posts.store') }}">
            <label for="title">Title</label>
            <input class="form-control" id="title" name='title' type="text"></input>
          </div>
          <div class="form-group">
            <label for="post">Blog Post</label>
            <textarea class="form-control" id="post" name='post' ></textarea>
          </div>
            <button type="submit" class="btn btn-secondary btn-md m-1">Publish New Post</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
