@extends('layouts.app')
@include('inc._navbar')

@section('title', '| View All Posts')

@section('content')
<div class="container">
<div class="row">
  <div class="col-lg-12">
      <h1>All Posts</h1>
      <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-secondary m-1">Create New Post</a>
  </div>
    <div class="col-lg-12"><hr></div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Post</th>
          <th>Created At</th>
          <th></th>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
              <!-- <img src="{{ asset('assets/images/blogImages' . $post->image)}}" height="400" width="800" /> -->
            <!-- <td>{{ $post->post}}</td> -->
            <td>{{ substr(($post -> post), 0, 150) }}{{ strlen($post->post) > 150 ? "..." : "" }}</td>
            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
            <td>
              <a href="{{ route('posts.show', $post -> id)}}" class="btn btn-sm btn-secondary m-1">View</a>
            <form method="PUT">
              <a href="{{ route('posts.edit', $post -> id)}}" class="btn btn-sm btn-light m-1">Edit</a>
            </form>
              <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex flex-row align-items-center justify-content-center">
        {{$posts -> links()}}
      </div>
      <div class="d-flex flex-row align-items-center justify-content-center">
        Page {{$posts->currentPage()}} of {{$posts->lastPage()}}
      </div>
    </div>
  </div>
</div>
  @endsection
