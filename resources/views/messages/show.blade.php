<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Message')

@section('content')
<div id="messageResponse" class="container-fluid">
  <div class="row">
    @include('inc._flash-message')
    <div id="content" class="col-lg-10">
      <h1>Messages</h1>
    <div id="messages" class="card p-3">
          <p><strong>ID: </strong>{{ $message -> id }}</p>
          <p><strong>Username: </strong>{{ $message -> username }}</p>
          <p><strong>Email: </strong>{{ $message -> email }}</p>
          <p><strong>Name: </strong>{{ $message -> name }}</p>
          <p><strong>Message: </strong>{{ $message -> message }}</p>
          <p><strong>Date Received: </strong>{{ date('M j, Y', strtotime($message->created_at)) }}</p>
      </div>
      @foreach($message-> responses as $response)
      @if($response ->response !== null)
      <div id="response" class="card p-3">
            <p><strong>Respondee: </strong>{{ $response -> respondee }}</p>
            <p><strong>Response: </strong>{{ $response -> response}}</p>
            <p><strong>Responded on: </strong>{{ date('M j, Y', strtotime($response->responded_on)) }}</p>
      </div>
      @endif
      @endforeach
          <div id="responseForm" class="form-group mt-3">
          <form method="POST" action="{{ action('ResponseController@store', $message -> id) }}">
               @csrf
              <input class="form-control" name="message_id" type="hidden" value="{{ $message -> id }}"></input>
              <label class="m-0" for='respondee'>Respondee</label>
              <input class="form-control" name="respondee" type="text" value="{{ Auth::user()->username}}"></input>
              <label class="m-0" for='response'>Response</label>
              <textarea class="form-control"  style="border: 2px groove #A8A8A8;" id="response" name="response" rows="10" placeholder="Type response here."></textarea>
              <button type="submit" class="btn btn-block btn-dark" method="GET">Send</button><br>
              <a href="{{ route ('responses.store', $message -> id) }}" class="btn btn-primary btn-block" method="POST">Save</a>
              <a href="{{ route('messages.destroy', $message->id) }}" class="btn btn-danger btn-block" method="DELETE">Delete</a>
              <a href="{{ url('messages') }}" class="btn btn-block btn-secondary" method="GET">View All Messages</a><br>
          </form>
        </div>
      </div>
    </div>
    @endsection
