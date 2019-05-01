<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._navbar')
@section('content')

  @include('inc._sidebar')
  <div id="content" class="col-sm-12 col-md-10 col-lg-8 offset-lg-2 col-xl-6 offset-xl-4">
        <h1 style="font-family: Freckle Face;">Blog Posts</h1>
        <hr>
      <div class="post mt-3">
      @foreach($posts as $post)
        <h3 style="font-family: Freckle Face;">{{ $post -> title}}</h3>
        <p>{{ $post -> post }}</p>
        <!-- </p>{{ substr($post -> post, 0, 300)}}{{ strlen($post -> post) > 300 ? "..." : ""}}</p> -->
          <a href="{{ url('single/'.$post -> slug)}}" class="btn btn-sm btn-secondary">Read more</a>
        <hr>
      @endforeach
      </div>
  </div>
@endsection
