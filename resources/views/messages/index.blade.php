@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Messages')

@section('content')
<div class="row ml-4 mt-3" style="margin-bottom: 80px;">
    <table-responsive>
    <h1>Messages</h1>
    <table id="messages" class="table">
      <thead>
        <th class="w-5">#</th>
        <th class="w-10">User Name</th>
        <th class="w-10">Email</th>
        <th class="w-10">Name</th>
        <th class="w-35">Message</th>
        <th class="w-10">Created On</th>
        <th class="w-10">Responded<br>On</th>
        <th class="w-10"></th>
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
  </table-responsive>
</div>
@endsection
