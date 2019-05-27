<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Message')
@include('inc._flash-message')

@section('content')
<div id="messageResponse" class="container-fluid">
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
        @foreach($message -> responses as $response)
          <p><strong>Respondee: </strong>{{ $response -> respondee }}</p>
          <p><strong>Response: </strong>{{ $response -> response}}</p>
          <p><strong>Responded on: </strong>{{ date('M j, Y', strtotime($response->responded_on)) }}</p>
          <hr>
        @endforeach
    </div>
        <div id="responseForm" class="form-group">
        <form method="POST" action="{{ action('MessageController@store') }}">
             @csrf
              <textarea class="form-control"  style="border: 2px groove #A8A8A8;" id="response" name="response" rows="10" placeholder="Type response here."></textarea>
              <button type="submit" class="btn btn-block btn-secondary m-2" method="GET">Send</button><br>
        </form>
            <a href="{{ route ('responses.store', $message -> id) }}" class="btn btn-primary btn-block" method="POST">Save</a>
            <a href="{{ route('messages.destroy', $message->id) }}" class="btn btn-danger btn-block" method="DELETE">Delete</a>
            <a href="{{ url('messages') }}" class="btn btn-block btn-secondary" method="GET">View All Messages</a><br>
      </div>
    </div>
</div>
@endsection
