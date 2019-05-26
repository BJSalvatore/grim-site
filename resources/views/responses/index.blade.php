@extends('layouts.app')
@include('inc._navbar')

@section('title', '| View Responses')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-lg-12">
        <h1>All Message Responses</h1>
    </div>
    <div class="col-lg-12"><hr></div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <th>Message Id</th>
          <th>Response</th>
          <th>Respondee</th>
          <th>Responded On</th>
          <th></th>
        </thead>
        <tbody>

          @foreach($responses as $response)
          <tr>
            <th>{{ $response-> message_id }}</th>
            <th>{{ $response-> response }}</th>
            <td>{{ $response-> respondee }}</td>
            <td>{{ $response-> responded_on }}</td>
            <td>
              <a href="{{ route('messages.show', $response -> message_id)}}" class="btn btn-block btn-secondary" method="GET">View Message</a><br>
            </td>
          </tr>
          </div>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
