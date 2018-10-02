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
        <form method="post" action='/posts/store')>
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title"></input>
          </div>
          <div class="form-group">
            <label for="post">Blog Post</label>
            <textarea class="form-control" id="post"></textarea>
          </div>
            <button type="submit" class="btn btn-secondary btn-md m-1">Publish New Post</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
