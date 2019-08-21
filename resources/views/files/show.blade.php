<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Files')

@extends('layouts.app')
@include('inc._navbar')

@section('content')
<div class="row">
  <div class="col-lg-4">
    @include('inc._sidebar')</div>
      <div class="col-lg-5">
          <div class="item mt-3">
              <h3>Name: {{ $file -> name }}</h3>
              <p>Type: {{$file -> type }}</p>
              <p>Title: {{ $file -> title}}</p>
              <img src="{{ asset('/uploadedFiles/' . $file->file)}}" height="300" width="auto"> </img></p>
          </div>
      </div>
  <div class="col-lg-3">
    <div class="col-lg-3">
    </div>
    <hr>
      <div class="container bg-secondary mt-3 align-content-center justify-content-center">
        <div  id="merchInfo" class="container p-4">
          <h5>Created on:</h5>
          <p>{{ date('Y-m-d\ H:i:s', strtotime($file -> created_at)) }}</p>
          <h5>Updated on:</h5>
          <p>{{ $file -> updated_at }}</p>
        </div>
      </div>
    <div>
      <a href="{{route('files.destroy', $file->id) }}" class="btn btn-block btn-danger m-1" method="DELETE">Delete</a>
      <a href="{{ route('files.edit', $file-> id) }}" class="btn btn-block btn-warning m-1" method="GET">Edit</a>
     <a href="{{ url('files') }}" class="btn btn-block btn-primary m-1" method="GET">View All Files</a>
     <a href="{{ url('files')}}" class="btn btn-block btn-secondary m-1" method="GET">Cancel</a>
    </div>
    </form>
  </div>
@endsection
