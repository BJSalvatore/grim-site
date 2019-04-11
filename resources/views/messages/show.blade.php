@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Messages')

@section('content')
<div class="row mt-3" style="margin-bottom: 80px;">
  <div class="col-lg-12">
    <div class="col-lg-8 offset-lg-2">
    <h1>Messages</h1>
    <table id="messages" class="table">
      <thead>
        <th>#</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Name</th>
        <th>Message</th>
        <th>Created On</th>
      </thead>
      <tbody>
        <tr>
          <th>{{ $message -> id }}</th>
          <td>{{ $message -> username }}</td>
          <th>{{ $message -> email }}</th>
          <td>{{ $message -> name }}</td>
          <td>{{ $message -> message }}</td>
          <td>{{ date('M j, Y', strtotime($message->created_at)) }}</td>
          <td>
            <a class="btn btn-block btn-secondary" method="GET">Respond</a><br>
            <a href="{{ route('messages.destroy', $message->id) }}" class="btn btn-danger btn-block" method="DELETE">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection
