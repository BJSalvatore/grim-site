@extends('layouts.app')
@include('inc._navbar')

@section('title', '| View All Posts')


@section('content')

<div class="row">
  <div class="col-md-12">
  <div class="col-md-8">
    <h1>All Posts</h1>
  </div>
  <div class="col-md-4">
    <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-secondary m-1">Create New Post</a>
  </div>
</div>
  <div class="col-md-12">
  <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <th>#</th>
        <th>Title</th>
        <th>Post</th>
        <th>Create At</th>
        <th></th>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <th>{{ $post -> id }}</th>
          <td>{{ $post -> title }}</td>
          <td>{{ substr($post -> post, 0, 50) }}{{ strlen($post -> post > 50 ? "..." : "") }}</td>
          <td>{{ $post -> created_at }}</td>
          <td><a href="{{ route('posts.show', $post -> id)}}" class="btn btn-sm btn-light m-1">View</a> <a href="{{ route('posts.edit', $post -> id)}}" class="btn btn-sm btn-light m-1">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
