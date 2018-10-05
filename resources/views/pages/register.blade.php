@section('title', '| Register')

@extends('layouts.app')
@include('inc._header')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-md-9">
      <h1>Register</h1>
      <p>You must be a registered user to leave blog comments.</p>
      <hr>
      <div class="form-group">
        <form method="POST" action="{{ action('RegisterController@create') }}">
           @csrf
            <label for="name">Name</label>
            <input class="form-control" id="name" name='name' type="text"></input>
          <div class="form-group">
            <label for="email">Email</label>
            <textarea class="form-control" id="email" name='email' ></textarea>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <password class="form-control" id="password" name='password' ></password>
          </div>
            <button type="submit" class="btn btn-secondary btn-md m-1">Register</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

@endsection
