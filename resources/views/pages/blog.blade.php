<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._header')

@section('content')

<div class="col-lg-12">
  <div class= "row">
    <div class="col-lg-3">@include('inc._sidebar')</div>
    <div class="col-lg-8">
      <div class="post mt-3">
        <h3>Post Title</h3>
        <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
      <hr>
      <div class="post mt-3">
        <h3>Post Title</h3>
        <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
      <hr>
      <div class="post mt-3">
        <h3>Post Title</h3>
        <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
      <hr>
      <div class="post mt-3">
        <h3>Post Title</h3>
        <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
    </div>
  </div> <!-- end of row -->
</div> <!-- end of grid -->
@endsection
