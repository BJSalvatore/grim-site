<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Messages')

@section('content')
<div id="messageResponse" class="container-fluid">
  <div class="row">
    <div id="content" class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
      <h1>Messages</h1>
    <div id="messages" class="card p-1">
          <p><strong>ID: </strong>{{ $message -> id }}</p>
          <p><strong>Username: </strong>{{ $message -> username }}</p>
          <p><strong>Email: </strong>{{ $message -> email }}</p>
          <p><strong>Name: </strong>{{ $message -> name }}</p>
          <p><strong>Message: </strong>{{ $message -> message }}</p>
          <p><strong>Date Received: </strong>{{ date('M j, Y', strtotime($message->created_at)) }}</p>
      </div>
    <div id="response" class="card p-1">
        @foreach($message-> response as $response)
          <p><strong>Respondee: </strong>{{ $response -> respondee }}</p>
          <p><strong>Response: </strong>{{ $response -> response}}</p>
          <p><strong>Responded on: </strong>{{ date('M j, Y', strtotime($response->responded_on)) }}</p>
          <hr>
        @endforeach
            <a href="{{ route ('messages.mail', $message ->id) }}" class="btn btn-block btn-primary" method="GET">Respond</a><br>
            <a href="{{ route('messages.destroy', $message->id) }}" class="btn btn-danger btn-block" method="DELETE">Delete</a>
            <a href="{{ url('messages') }}" class="btn btn-block btn-secondary" method="GET">View All Messages</a><br>
      </div>
    </div>
  </div>
</div>
@endsection
