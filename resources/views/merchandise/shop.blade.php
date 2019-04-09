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
            @foreach($items as $item)
              <h3>Item: {{ $item -> itemName }}</h3>
              <p>Price: {{ $item -> price}}</p>
              <p>Description: {{ $item -> description}}</p>
              <p>Size: {{ $item -> size}}</p>
              <p>Quantity: {{ $item -> quantity}}</p>
              <img src="{{ asset('storage/app/public/merch/' . $item->image)}}" height="300" width="auto"> </img></p>
            @endforeach
          </div>
      </div>
  <div class="col-lg-3">
    <div class="col-lg-3">
      <form>
       <!-- <a href="{{ route('items.index')}}" class="btn btn-block btn-secondary m-1" method="GET">Add to Cart</a> -->
      </div>
      </form>

    </div>
    <hr>

      <div class="container bg-secondary mt-3 align-content-center justify-content-center">
        <div  id="merchInfo" class="container p-4">

        </div>
      </div>
    <div>
     <a href="{{ url('items')}}" class="btn btn-block btn-secondary m-1" method="GET">Cancel</a>
    </div>
    </form>

  </div>
@endsection
