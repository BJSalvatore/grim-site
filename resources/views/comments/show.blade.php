<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Comments')

@extends('layouts.app')
@include('inc._navbar')

@section('content')
<div class="row">
  <div class="col-lg-4">
    @include('inc._sidebar')</div>
      <div class="col-lg-5">
          <div class="comment mt-3">
            <th>{{ $comment-> id }}</th>
            <th>{{ $comment->username }}</th>
            <td>{{ $comment->comment }}</td>
          </div>
      </div>
  <div class="col-lg-3">
    <div class="col-lg-3">
    </div>
    <hr>
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
    <div>
     <a href="{{ url('comments') }}" class="btn btn-block btn-primary m-1" method="GET">View All Comments</a>
     <a href="{{ url('comments')}}" class="btn btn-block btn-secondary m-1" method="GET">Cancel</a>
    </div>
    </form>
  </div>
@endsection
