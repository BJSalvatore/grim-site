@extends('layouts.app')

@section('title', '| View All Posts')
@include('inc._navbar')
@section('content')
<div class="container mt-3">
  <div class="row">
    @include('inc._flash-message')
    <div class="col-lg-12">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post</a>
        <hr>
      <table class="table-responsive">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Post</th>
          <th>Image ID</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th></th>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ substr(($post -> post), 0, 150) }}{{ strlen($post->post) > 150 ? "..." : "" }}</td>
            @if($post -> image )
              <td><img src="{{ secure_asset('https://s3.amazonaws.com/grim-images/images/' . $post -> image) }}" height="150" width="auto"></img></td>
              @else
              <td>No Image</td>
            @endif
            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
            <td>{{ date('M j, Y', strtotime($post->updated_at)) }}</td>
            <td>
              <a href="{{ route('posts.show', $post -> id)}}" class="btn btn-sm btn-secondary m-1" method="GET">View</a>
              <a href="{{ route('posts.edit', $post -> id)}}" class="btn btn-sm btn-light m-1" method="GET">Edit</a>
              <a action="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-sm" method="DELETE">Delete</a>
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
