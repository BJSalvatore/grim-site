@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Create New Post')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-9 mt-3">
        <h1>Enter New Blog Post</h1>
        <hr>
        <div id="blogForm" class="form-group">
          <form method="POST" action="{{ action('PostController@store') }}" enctype="multipart/form-data">
            <div class="row">
             @csrf
             <div class="col-md-9">
                <label class="mt-1" for="title">Title</label>
                <input class="form-control" id="title" name="title" type="text"></input>
                @if($errors->has('title'))
                  <h5 class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('title') }}</strong></h5>
                @endif
              </div>
               <div class="col-md-9">
                <label class="mt-1" for="slug">Slug</label>
                <input class="form-control" id="slug" name="slug" type="text"></input>
                @if($errors->has('slug'))
                  <h5 class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('slug') }}</strong></h5>
                @endif
              </div>
               <div class="col-md-9">
                <label class="mt-1" for="post">Blog Post</label>
                <textarea rows="10" cols="col-lg-12" class="form-control" id="post" name='post'></textarea>
                @if($errors->has('post'))
                  <h5 class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('post') }}</strong></h5>
                @endif
              </div>
              <div class="col-md-9">
                <label class="mt-1" for="blog_image">Upload Image</label>
                <input class="form-control mt-1" id="blog_image" name="blog_image" type="file"></input>
                @if($errors->has('blog_image'))
                   <h5 class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('blog_image') }}</strong></h5>
                 @endif
              </div>
              <div class="col-md-9">
                 <button id="blogButton" type="submit" class="btn btn-secondary btn-md mt-2">Publish New Post</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
