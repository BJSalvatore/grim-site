@section('title', '| Press')

@extends('layouts.app')
@include('inc._header')

@section('content')
      @include('inc._sidebar')
      <div id="content" class="col-sm-12 col-md-10 col-lg-8 offset-lg-2 col-xl-6 offset-xl-4">
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
@endsection
