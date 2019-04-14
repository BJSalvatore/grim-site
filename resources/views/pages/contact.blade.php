<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Contact Us')

@extends('layouts.app')
@include('inc._header')

@section('content')
  <div class = "d-flex flex-row">
    <div class="col-lg-4">@include('inc._sidebar')</div>
  <div class="col-md-12">
    <div class = "col-lg-8 mt-3 p-1">
      <h1>Here's How You Can Contact us!</h1>
      <h5>Phone:</h5> <p>{{ $bandphone }}</p>
      <hr>
      <h5>Mailing Address:</h5>
      <p>{{ $bandaddress['bandcontact'] }}</p>
      <p>{{ $bandaddress['bandstreetaddress'] }}</p>
      <p>{{ $bandaddress['bandcity'] }}, {{ $bandaddress['bandstate'] }} {{ $bandaddress['bandzip'] }}</p>
      <p>{{ $bandaddress['bandcountry'] }}</p>
      <hr>
      <h5>To email directly,<br>click envelope icon below:</h5>
      <p><a href="mailto:boboedy@yahoo.com"><i class="fas fa-envelope fa-3x"></i></a></p>
      <h5>Or login and use the form below:</h5>
    <hr>
    <div class="col-md-8 mb-3 p-1">
    <h1>Contact Form</h1>
      <div class="form-group">
        <form method="POST" action="{{ action('MessageController@store') }}">
           @csrf
        <label for="email">Email:</label>
        @if (auth()->check())
        <input v-model="email" name="email" class="form-control" type="text" placeholder="Email address" value="{{ Auth::user()->email }}">
        @else
        <input v-model="email" name="email" class="form-control" type="text" placeholder="Email address" value="Email address">
        @endif
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input v-model="name" name="name" class="form-control" type="text" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        @if (auth()->check())
        <input v-model="username" name="username" class="form-control" type="text" value="{{ Auth::user()->username}}">
        @else
          <input v-model="username" name="username" class="form-control" type="text" value="User name">
        @endif
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea v-model="message" name="message" class="form-control" type="text" placeholder="Type your message here."></textarea>
      </div>
      <button type="submit" class="btn btn-dark btn-md m-1">Send Message</button>
    </form>
    </div>
  </div>
</div>
</div>
@endsection
