<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Inventory')

@extends('layouts.app')

@include('inc._header')

@section('content')

  @include('inc._sidebar')
    <div id="content" class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
      <div class="col-xl-12 offset-xl-7 pl-4">
        <h1 style="font-family: Freckle Face;">Buy Stuff!!</h1>
        <hr>
        <div class="row">
          <div class="col-2">
            @foreach($items as $item)
          <div class="card-columns">
            <div class="card mt-3">
              <h3 class="card-header"><strong>{{ $item -> itemName }}</strong></h3>
              <div class="card-body">
              <img img-responsive justify-content-center style="margin-bottom: 20px;" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/' . $item->image)}}" height="300" width="auto"> </img>
              <p><strong>Price: $</strong>{{ $item -> price}}</p>
              <p><strong>Description: </strong>{{ $item -> description}}</p>
              <form>
              @if($item -> size != null)
              <p><strong>Size: </strong>{{ $item -> size}}</p>
              @endif
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
                <a href="{{ route('cart.store')}}" class="btn btn-success" method="GET">Add to Cart</a>
              </form>
            </div>
            </div>
          </div>
            @endforeach
          </div>
        </div>
        </div>
      </div>
@endsection
