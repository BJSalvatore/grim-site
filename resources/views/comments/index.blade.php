@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Manage Comments')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-lg-12">
        <h1>All Blog Comments</h1>
    </div>
    <div class="col-lg-12"><hr></div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <a href="{{ url('comments/unnaproved') }}" class="btn btn-block btn-primary m-1" method="GET">View Only Unnaproved Comments</a>
      <table class="table">
        <thead>
          <th>#</th>
          <th>Username</th>
          <th>Comment</th>
          <th>Post ID</th>
          <th>Status</th>
          <th>Created At</th>
          <th>Approved At</th>
          <th></th>
        </thead>
        <tbody>

          @foreach($comments as $comment)
          <tr>
            <th>{{ $comment-> id }}</th>
            <th>{{ $comment->username }}</th>
            <td>{{ $comment->comment }}</td>
            <td>{{ $comment-> post_id }}</td>
            @if($comment -> approved == true)
            <td>Approved</td>
            @else
            <td>
              <div class="form-group">
              <form action="{{action('CommentsController@update', $comment->id )}}" method="POST">
                @csrf
                @method('PUT')
                <input class="form-control form-control-lg" id="username" name='username' value="{{ $comment -> username }}" type="hidden"></input>
                <input class="form-control form-control-lg" id="comment" name='comment' value="{{ $comment -> comment }}" type="hidden"></input>
                <input class="form-control form-control-lg" id="post_id" name='post_id' value="{{ $comment -> post_id }}" type="hidden"></input>
                <input class="form-control form-control-lg" id="approved" name='approved' value="{{ $comment -> approved }}" type="hidden"></input>
              <center><input class="btn btn-sm btn-danger" type="submit" value="Approve"></input></center>
              </form>
            </div>
            </td>
            @endif
            <td>{{ date('M j, Y', strtotime($comment -> created_at)) }}</td>
            <td>{{ date('M j, Y', strtotime($comment -> approved_at)) }}</td>
            <td>
              <a href="{{ route('comments.show', $comment -> id)}}" class="btn btn-block btn-secondary" method="GET">View Comment</a><br>
            </td>
          </tr>
          </div>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
