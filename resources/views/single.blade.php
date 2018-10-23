@section('title', "| $post -> title")

@extends('layouts.app')
@include('inc._navbar')

@section('content')
<div class="row">
  <div class="col-lg-4">
    @include('inc._sidebar')</div>
    <div class="col-lg-5">
      <div class="post mt-3">
          <h3>{{ $post -> title }}</h3>
          <p>{{ $post -> post}}</p>
      </div>
    </div>
  </div>
</div>
@endsection
