<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Inventory')

@extends('layouts.app')
@include('inc._navbar')
@section('content')
<div class="row">
  <div class="col-lg-4">
    @include('inc._sidebar')</div>
      <div class="col-lg-5">
          <div class="item mt-3">
              <h3>{{ $item -> itemName }}</h3>
              <p><strong>Price: </strong>${{ $item -> price}}</p>
              <p><strong>Description: </strong>{{ $item -> description}}</p>
              <p><strong>Size: </strong>{{ $item -> size}}</p>
              <p><strong>Quantity: </strong>{{ $item -> quantity}}</p>
              <img src="{{ asset('https://s3.amazonaws.com/grim-images/merch/' . $item->image)}}" height="300" width="auto"> </img></p>
          </div>
      </div>
  <div class="col-lg-3">
    <div class="col-lg-3">
    </div>
    <hr>
      <div class="container bg-secondary mt-3 align-content-center justify-content-center">
        <div  id="merchInfo" class="container p-4">
          <h5>Created on:</h5>
          <p>{{ date('Y-m-d\ H:i:s', strtotime($item -> created_at)) }}</p>
          <h5>Updated on:</h5>
          <p>{{ $item -> updated_at }}</p>
        </div>
      </div>
    <div>
      <a href="{{route('items.destroy', $item->id) }}" class="btn btn-block btn-danger m-1" method="DELETE">Delete</a>
      <a href="{{ route('items.edit', $item-> id) }}" class="btn btn-block btn-warning m-1" method="GET">Edit</a>
     <a href="{{ url('items') }}" class="btn btn-block btn-primary m-1" method="GET">View All Inventory</a>
     <a href="{{ url('items')}}" class="btn btn-block btn-secondary m-1" method="GET">Cancel</a>
    </div>
    </form>
  </div>
@endsection
