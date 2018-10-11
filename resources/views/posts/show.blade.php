<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._navbar')

@section('content')

<div class="col-lg-12">
  <div class= "row">
    <div class="col-lg-4">@include('inc._sidebar')</div>
    <div class="col-lg-6">
      <div class="post mt-3">
        <h3>{{ $post -> title }}</h3>
        <p>{{ $post -> post}}</p>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="container bg-secondary p-4">
        <h6>Created on:</h6>
        <p>{{ $post -> created_at }}</p>
        <h6>Updated on:</h6>
        <p>{{ $post -> updated_at }}</p>
      </div>
      <a href="{{ route('posts.edit', $post -> id)}}" class="btn btn-sm btn-light m-1">Edit</a>
      <a href="#" class="btn btn-sm btn-danger m-1">Delete</a>
    </div>
      <hr>
  </div> <!-- end of row -->
</div> <!-- end of grid -->
@endsection
