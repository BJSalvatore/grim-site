@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Respond to Message')
@include('inc._flash-message')
@section('content')

      <div id="content" class="col-sm-12 col-md-10 col-lg-8 col-xl-6">

            <h1>Messages</h1>
              <p><strong>User Name: </strong>{{ $email -> to_name}}</p>
              <p><strong>Email Address: </strong>{{ $email -> to_email }}</p>
              <p><strong>Title: </strong>{{ $email -> title }}
              <p><strong>Message: </strong>{{ $email -> body }}</p>
              <p><strong>Created at: </strong>{{ $message -> created_at }}</p>

              @foreach($message-> response as $response)
                  @if($response -> response !== null)
                <p><strong>Respondee: </strong>{{ $response -> respondee }}</p>
                <p><strong>Response: </strong>{{ $response -> response}}</p>
                <p><strong>Responded on: </strong>{{ date('M j, Y', strtotime($response->responded_on)) }}</p>
                  @endif
              @endforeach

          <div id="responseForm" class="form-group">
          <form method="POST" action="{{ action('MessageController@store') }}">
               @csrf
                <textarea class="form-control"  style="border: 2px groove #A8A8A8;" id="response" name="response" rows="10" placeholder="Type response here."></textarea>
                <button type="submit" class="btn btn-block btn-secondary m-2" method="GET">Send</button><br>
          </form>
        </div>
      </div>
    </div>

@endsection
