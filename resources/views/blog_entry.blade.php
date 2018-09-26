@extends('layouts.app')

@section('content')
<h1>Blog Entry</h1>
<div class="container"
  <form>
    <div class="form-group">
      <label for="date">Date</label>
      <input type="date" class="form-control" id="date" placeholder="date">
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="title">
      </input>
    </div>
    <div class="form-group">
      <label for="blog_post">Blog Post</label>
      <textarea class="form-control" id="blog_post"></textarea>
    </div>
  </form>
</container>
@endsection

@include('inc._footer')
