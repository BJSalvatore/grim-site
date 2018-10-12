@section('title', '| Edit Post')

@extends('layouts.app')
@include('inc._navbar')

@section('content')
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-4">
            @include('inc._sidebar')</div>
            <div class="col-lg-6">
                <form method="PUT" action="{{ route('posts.update', 'PostController@update', $post -> id)}}">
                  <form method="GET" action="{{ route('posts.show', 'PostController@show', $post -> id)}}">
                    @csrf
                    <label class="mt-1" for="title">Title</label>
                    <input class="form-control form-control-lg" id="title" name='title' value="{{ $post -> title}}" type="text"></input>
                    <label class="mt-1" for="post">Blog Post</label>
                    <input class="form-control" id="post" name='post' value="{{ $post -> post}}" type="textarea"></input>
            </div>
            <div class="col-lg-2">
                <div class="container bg-secondary p-4">
                    <h6>Created on:</h6>
                    <p>{{ $post -> created_at }}</p>
                    <h6>Updated on:</h6>
                    <p>{{ $post -> updated_at }}</p>
                    <a href="{{ route('posts.show', $post -> id)}}" class="btn btn-block btn-danger m-1">Cancel</a>
                    {{-- <a href="{{ action('posts.update', 'PostController@update', $post -> id)}}" class="btn btn-success btn-block">Save Changes</a> --}}
                    <button type=”submit” class="form-control btn btn-success btn-block">Save Changes</button>
                </div>
                </form>
            </div>
            <hr>
        </div>
    </div>
    @endsection
