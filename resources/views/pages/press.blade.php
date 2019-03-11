<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Press')

@extends('layouts.app')
@include('inc._header')

@section('content')

<div class="col-lg-12">
  <div class = "d-flex flex-row">
    <div class="col-4"></div>
      <div class="col-lg-8 p-4">
          <h1 style="font-family: Freckle Face;">Press Releases</h1>
          <hr>
          <div class= "release mt-3">
         @foreach($releases as $release)
           <h2><strong>{{ $release -> title }}<strong></h2>
           <h5>{{ $release -> release_date }}</h5>
           <h5><a href="{{ $release -> url }}">Click here!</a></h5>
           <hr>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
