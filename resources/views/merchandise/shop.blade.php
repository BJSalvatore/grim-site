<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Inventory')

@extends('layouts.app')

@include('inc._header')

@section('content')

  @include('inc._sidebar')
    <div id="content" class="col-sm-6 col-md-3 offset-md-4 col-lg-3 offset-lg-4">
        <h1 style="font-family: Freckle Face;">Buy Stuff!!</h1>
        <hr>
            @foreach($items as $item)
            <div class="card mt-3">
              <h3 class="card-header"><strong>{{ $item -> itemName }}</strong></h3>
              <div class="card-body">
              <img img-responsive justify-content-center style="margin-bottom: 20px;" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/' . $item->image)}}" height="300" width="auto"> </img>
              <p><strong>Price: $</strong>{{ $item -> price}}</p>
              <p><strong>Description: </strong>{{ $item -> description}}</p>
              <form>
              @if($item -> size != null)
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-dark">Size</button>
                  <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <!-- <p><strong>Size: </strong>{{ $item -> size != null}}</p> -->
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-dark">Quantity</button>
                  <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">1</a>
                    <a class="dropdown-item" href="#">2</a>
                    <a class="dropdown-item" href="#">3</a>
                  </div>
                </div>
                </div>
                <a href="{{ route('items.index')}}" class="btn btn-success" method="GET">Add to Cart</a>
              </form>
            </div>
            </div>
            @endforeach
        <!-- <div>
         <a href="{{ url('items')}}" class="btn btn-block btn-primary m-1" method="GET">Cancel</a>
        </div> -->
@endsection
