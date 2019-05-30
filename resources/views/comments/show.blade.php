<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Comment')

@extends('layouts.app')
@include('inc._navbar')

@section('content')
      <div class="row">
        @include('inc._flash-message')
        <div class="col-lg-12">

        <div id="comment">
        <div class="comment mt-3">
          <p><strong>ID: </strong>{{ $comment-> id }}</p>
          <p><strong>Username: </strong>{{ $comment->username }}</p>
          <p><strong>Comment: </strong>{{ $comment->comment }}</p>
        </div>
      <div class="container bg-secondary mt-3 align-content-center justify-content-center">
        <div  id="commentInfo" class="container p-4">
          <h5>Created on:</h5>
          <p>{{ date('Y-m-d\ H:i:s', strtotime($comment -> created_at)) }}</p>
          <h5>Updated on:</h5>
          <p>{{ $comment -> updated_at }}</p>
          <h5>Approved on:</h5>
          <p>{{ $comment -> approved_at }}</p>
        </div>
      </div>
     <a href="{{ url('/status') }}" class="btn btn-block btn-primary m-1" method="GET">View All Comments</a>
    </div>
  </div>
@endsection
