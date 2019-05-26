@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Messages')

@section('content')
<div class="row mt-3" style="margin-bottom: 80px;">
  <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
    <div class="col-lg-8 offset-lg-4">
    <h1>Messages</h1>
    <table id="messages" class="table">
      <thead>
        <th>#</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Name</th>
        <th>Message</th>
        <th>Created On</th>
        <th>Responded On</th>
      </thead>
      <tbody>
        @foreach($messages as $message)
        <tr>
          <th>{{ $message -> id }}</th>
          <td>{{ $message -> username }}</td>
          <th>{{ $message -> email }}</th>
          <td>{{ $message -> name }}</td>
          <td>{{ $message -> message }}</td>
          <td>{{ date('M j, Y', strtotime($message->created_at)) }}</td>
          <td>{{ $message -> responded_on }}</td>
          <td>
            <a href="{{ route('messages.show', $message -> id) }}" class="btn btn-block btn-secondary" method="GET">View</a><br>
            <a href="{{ route('messages.destroy', $message->id) }}" class="btn btn-danger btn-block" method="DELETE">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection
