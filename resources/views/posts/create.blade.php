@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Create New Post')

@section('content')
<div id="blogForm" class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-md-9">
      <h1>Enter New Blog Post</h1>
      <hr>
      <div class="form-group">
        <form data-parsley-validate method="POST" action="{{ action('PostController@store') }}">
           @csrf
            <label class="mt-1" for="title">Title</label>
            <input class="form-control" id="title" name='title' type="text" required maxlength="255"></input>

            <label class="mt-1" for="slug">Slug</label>
            <input class="form-control" id="slug" name="slug" type="text" required minlength='5' maxlength="255"></input>

          <div class="form-group">
            <label class="mt-1" for="post">Blog Post</label>
            <textarea class="form-control" id="post" name='post' required></textarea>
          </div>
            <button type="submit" class="btn btn-secondary btn-md m-1">Publish New Post</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
