<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._navbar')

@section('content')

<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-4">
            @include('inc._sidebar')</div>
            <div class="col-lg-5">
                <div class="post mt-3">
                    <img src="{{ asset('assets/images/blogImages/' . $post->image)}}" height="200" width="400"> </img>
                    <h3>{{ $post -> title }}</h3>
                    <p>{{ $post -> post}}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="container bg-secondary p-4 align-content-center justify-content-center">
                    <h5>URL:</h5>
                    <a href="{{ url('single/'.$post -> slug)}}">{{ url('single/'.$post -> slug)}}</a> <!--appends slug to base url-->
                    <h5>Created on:</h5>
                    <p>{{ date('Y-m-d\ H:i:s', strtotime($post -> created_at)) }}</p>
                    <h5>Updated on:</h5>
                    <p>{{ $post -> updated_at }}</p>
                </div>
                  <a href="{{ route('posts.edit', $post -> id)}}" class="btn btn-md btn-block btn-light m-1">Edit</a>
                  <form action="{{ route('posts.destroy', $post->id) }}">
                      @csrf
                      @method("DELETE")
                      <button class="btn btn-danger btn-md btn-block">Delete</button>
                  </form>
                  <a href="{{ route('posts.index')}}" class="btn btn-md btn-block btn-warning m-1">See All Posts</a>
            </div>
            <hr>
        </div> <!-- end of row -->
    </div> <!-- end of grid -->
    @endsection
