@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Respond to Message')

@section('content')

      <div id="content" class="col-sm-12 col-md-10 col-lg-8 col-xl-6">

            <h1>Messages</h1>
            @if($message -> username)
              <p><strong>User Name: </strong>{{ $message -> username}}</p>
            @endif
              <p><strong>Email Address: </strong>{{ $message-> email }}</p>
              <p><strong>Message: </strong>{{ $message -> message }}</p>
              <p><strong>Created at: </strong>{{ $message -> created_at }}</p>

          <div id="responseForm" class="form-group">
          <form method="POST" action="{{ action('MessageController@store', 'EmailController@send') }}">
               @csrf
                <textarea class="form-control"  style="border: 2px groove #A8A8A8;" id="response" name="response" rows="10" placeholder="Type response here."></textarea>
                <a href="{{ route('messages.show', $message -> id) }}" class="btn btn-block btn-secondary m-2" method="GET">Send</a><br>
          </form>
        </div>
      </div>
    </div>

@endsection
