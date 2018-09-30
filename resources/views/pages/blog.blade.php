<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@include('inc._content')
<div class="container m-0 p-0">
  <div class="col-lg-12">
    <div class="row">
        <div class="col-3">@include('inc._sidebar')</div>
        <div class="col-lg-9">
        
        </div>
    </div> <!-- end of row -->
  </div> <!-- end of grid -->
</div> <!-- end of container-->


@include('inc._footer')
