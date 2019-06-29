<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._navbar')
@section('content')
<!-- <div class="row"> -->
  <div id="content">
    <div class="col-lg-8 offset-lg-2">
        @include('inc._flash-message')
    </div>
      <div class="col-lg-8 offset-lg-2">
          <div id="post" class="post card container-fluid">
            @if($post -> image)
              <img src="{{ asset('https://s3.amazonaws.com/grim-images/images/' . $post->image)}}" height="auto" width="260"> </img>
            @endif
              <h3>{{ $post -> title }}</h3>
              <p>{{ substr($post -> post, 0, 300)}}{{ strlen($post -> post) > 300 ? "..." : ""}}</p>
              <a href="{{ url('single/'.$post -> slug)}}" class="btn btn-md btn-grim">Read more</a>

              @if (auth()->user()->isAdmin())
                    <div class="bg-secondary mt-3 align-content-center justify-content-center">
                      <div  id="postInfo" class="container-fluid p-4">
                        <h5>URL:</h5>
                        <a href="{{ url('single/'.$post -> slug)}}">{{ url('single/'.$post -> slug)}}</a> <!--appends slug to base url-->
                        <h5>Created on:</h5>
                        <p>{{ date('Y-m-d\ H:i:s', strtotime($post -> created_at)) }}</p>
                        <h5>Updated on:</h5>
                        <p>{{ $post -> updated_at }}</p>
                      </div>
                    </div>

                  <form action id="editForm" method="POST" action="{{ route('posts.destroy', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                  <div class="m-0">
                    <button type="submit" class="btn btn-block btn-danger mt-1">Delete</a>
                  </div>
                    <a href="{{ route('posts.edit', $post-> id) }}" class="btn btn-block btn-warning mt-1" method="GET">Edit</form>
                    <a href="{{ url('posts') }}" class="btn btn-block btn-primary m-0" method="GET">View All Posts</a>
                  </form>
                @endif

          </div>

          <div id="comment" class="flex-container ml-3">
            <section class="content">
            @foreach($post-> comments as $comment)
                <p><strong>UserName: </strong>{{$comment-> username}}</p>
                <p><strong>Comment:</strong><br/>{{ $comment-> comment}}</p>
                <p>{{ date('D, d M y H:i:s', strtotime($comment -> created_at)) }}</p>
                <hr>
            @endforeach
              </section>
            </div>

              </div>
      </div>



@endsection
