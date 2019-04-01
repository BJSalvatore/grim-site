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
          <div class= "release mt-3 mb-4">
         @foreach($releases as $release)
          <img id="pressImage" class="d-flex img-responsive" src="{{ asset('assets/images/kaotic-radio.jpg') }}"></img>
           <h3><strong>{{ $release -> title }}<strong></h3>
           <h5>{{ $release -> release_date }}</h5>
           <h5><a href="{{ $release -> url }}">Click here!</a></h5>
           <hr>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
