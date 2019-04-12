@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Respond to Message')

@section('content')
<div class="row mt-3" style="margin-bottom: 80px;">
  <div class="col-md-12">
    <div class="col-md-10 offset-md-2">
        <h1>Messages</h1>
          <div class="well col-md-9">
            @if($message -> username)
              <p><strong>User Name: </strong>{{ $message -> $username}}</p>
            @endif
              <p><strong>Email Address: </strong>{{ $message-> email }}</p>
              <p><strong>Message: </strong>{{ $message -> message }}</p>
              <p><strong>Created at: </strong>{{ $message -> created_at }}</p>
          </div>
          <div id="blogForm" class="form-group">
          <form method="" action="{{ action('EmailController@send') }}">
            <div class="row">
              @csrf
              <div class="col-md-9">
                 <textarea class="form-control"  style="border: 2px groove #A8A8A8;" id="response" name="response" rows="10" placeholder="Type response here."></textarea>
              <div class="col-md-5 offset-md-3">
                <a href="{{ route('messages.show', $message -> id) }}" class="btn btn-block btn-secondary m-2" method="GET">Send</a><br>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
