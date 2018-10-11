<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._navbar')

@section('content')

<div class="col-lg-12">
  <div class= "row">
    <div class="col-lg-3">@include('inc._sidebar')</div>
    <div class="col-lg-8">
      <div class="post mt-3">
        <h3>{{ $posts -> title }}</h3>
        <p>{{ $posts -> post}}</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
      <hr>
    </div>
  </div> <!-- end of row -->
</div> <!-- end of grid -->
@endsection
