@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Messages')

@section('content')
<div class="container mt-3">
  <div class="row">
  @include('inc._flash-message')
  <div class="col-lg-12">
    <h1>Messages</h1>
    <table-responsive>
    <table id="messages" class="table-repsonsive table-striped">
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
          <td>{{ $message -> id }}</td>
          <td>{{ $message -> username }}</td>
          <td>{{ $message -> email }}</td>
          <td>{{ $message -> name }}</td>
          <td>{{ $message -> message }}</td>
          <td>{{ date('M j, Y', strtotime($message->created_at)) }}</td>
          <td>{{ $message -> responded_on }}</td>
          <td>
            <a href="{{ route('messages.show', $message -> id) }}" class="btn btn-block btn-secondary mt-3" method="GET">View</a><br>
            <a href="{{ route('messages.destroy', $message->id) }}" class="btn btn-danger btn-block mb-3" method="DELETE">Delete</a>
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
