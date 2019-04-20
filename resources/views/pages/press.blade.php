<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Press')

@extends('layouts.app')
@include('inc._header')

@section('content')
<div class="boostrap-container">
      <div class="col-md-4">@include('inc._sidebar')</div>
      <div id="content" class="col-md-8 offset-md-6 p-4">
          <h1 style="font-family: Freckle Face;">Press Releases</h1>
          <hr>
          <div id="press" class="release flex-row">
         @foreach($releases as $release)
         @if($release -> image)
           <img src="{{ secure_asset('https://s3.amazonaws.com/grim-images/press/' . $release->image)}}"> </img>
         @endif
           <h3><strong>{{ $release -> title }}<strong></h3>
           <h5>{{ $release -> release_date }}</h5>
           <h5><a href="{{ $release -> url }}">Click here!</a></h5>
           <hr>
        @endforeach
      </div>
    </div>
</div>
@endsection
