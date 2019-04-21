<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Inventory')

@extends('layouts.app')

@include('inc._header')

@section('content')
      <div class="col-md-4">@include('inc._sidebar')</div>
      <div id="content" class="col-md-6 offset-md-6 p-4">
        <h1 style="font-family: Freckle Face;">Buy Stuff!!</h1>
        <hr>
          <div class="item mt-3">
            @foreach($items as $item)
              <h3>Item: {{ $item -> itemName }}</h3>
              <img src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/' . $item->image)}}" height="300" width="auto"> </img>
              <p>Price: ${{ $item -> price}}</p>
              <p>Description: {{ $item -> description}}</p>
              <form>
              @if($item -> size)
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary">Size</button>
                  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">SM</a>
                    <a class="dropdown-item" href="#">MD</a>
                    <a class="dropdown-item" href="#">LG</a>
                    <a class="dropdown-item" href="#">XL</a>
                  </div>
                </div>
                </div>
              @endif
              <p>Size: {{ $item -> size != null}}</p>
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary">Quantity</button>
                  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">1</a>
                    <a class="dropdown-item" href="#">2</a>
                    <a class="dropdown-item" href="#">3</a>
                  </div>
                </div>
                </div>
              </form>
                <div class="col-md-6">
                   <a href="{{ route('items.index')}}" class="btn btn-block btn-secondary m-1" method="GET">Add to Cart</a>
                </div>
            @endforeach
<!--
        <div class="container bg-secondary mt-3 align-content-center justify-content-center">
          <div  id="merchInfo" class="container p-4">

          </div>
        </div> -->
        <div>
         <a href="{{ url('items')}}" class="btn btn-block btn-primary m-1" method="GET">Cancel</a>
        </div>
      </div>
@endsection
