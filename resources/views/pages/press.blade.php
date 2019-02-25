<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Press')

@extends('layouts.app')

@include('inc._header')

@section('content')
<div class = "d-flex flex-row">
  <div class="col-4">@include('inc._sidebar')</div>
    <div class="col-lg-8">
      <h1 style="font-family: Freckle Face;">Press Releases</h1>
    </div>
</div>

@endsection
