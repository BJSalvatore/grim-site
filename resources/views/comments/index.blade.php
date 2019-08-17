@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Manage Comments')

@section('content')
<div class="container mt-3">
  <div class="row">
    @include('inc._flash-message')
    <div class="col-lg-12">
        <h1>All Blog Comments</h1>
        <a href="{{ route('comments.unapproved') }}" class="btn btn-block btn-primary" method="GET">View Only Unnaproved Comments</a>
      <hr>
      <table-responsive>
      <table id="comments" class="table-responsive mt-3">
        <thead>
          <th class="w-10">#</th>
          <th class="w-10">Username</th>
          <th class=W->Comment</th>
          <th class="w-5">Post ID</th>
          <th class="w-10">Status</th>
          <th class="w-10">Created At</th>
          <th class="w-10">Approved At</th>
          <th class="w-10"></th>
        </thead>
        <tbody>
          @foreach($comments as $comment)
          <tr>
            <th>{{ $comment-> id }}</th>
            <th>{{ $comment->username }}</th>
            <td>{{ $comment->comment }}</td>
            <td>{{ $comment-> post_id }}</td>
            @if($comment -> approved == true)
            <td><strong>Approved</strong></td>
            @else
            <td>
              <form action="{{action('CommentsController@update', $comment->id )}}" method="POST">
                @csrf
                @method('PUT')
                <input class="form-control form-control-lg" id="username" name='username' value="{{ $comment -> username }}" type="hidden"></input>
                <input class="form-control form-control-lg" id="comment" name='comment' value="{{ $comment -> comment }}" type="hidden"></input>
                <input class="form-control form-control-lg" id="post_id" name='post_id' value="{{ $comment -> post_id }}" type="hidden"></input>
                <input class="form-control form-control-lg" id="approved" name='approved' value=1 type="hidden"></input>
                <input id="approveBtn" class="btn btn-md btn-danger" type="submit" value="Approve"></input>
              </form>
            </td>
            @endif
            <td>{{ date('M j, Y', strtotime($comment -> created_at)) }}</td>
            <td>{{ date('M j, Y', strtotime($comment -> approved_at)) }}</td>
            <td>
              <a href="{{ route('comments.show', $comment -> id)}}" class="btn btn-block btn-secondary" method="GET">View Comment</a><br>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </table-responsive>
    </div>
  </div>
</div>
@endsection
