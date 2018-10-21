<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._navbar')
{{-- @include('inc._header') --}}

@section('content')
<div class="col-lg-12">
  <div class= "d-flex flex-row">
    <div class="col-lg-4">@include('inc._sidebar')</div>
    <div class="col-lg-8">
      <div class="post mt-3">
      @foreach($posts as $post)
        <h3 style="font-family: Freckle Face;">{{ $post -> title}}</h3>
      </p>{{ substr($post -> post, 0, 300)}}{{ strlen($post -> post) > 300 ? "..." : ""}}</p>
          <a href="" class="btn btn-sm btn-secondary">Read more</a>
        <hr>
      @endforeach
      </div>
    </div>
  </div> <!-- end of row -->
</div> <!-- end of grid -->
@endsection
