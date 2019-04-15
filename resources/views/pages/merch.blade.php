<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Buy Stuff')

@extends('layouts.app')
@include('inc._navbar')
@section('content')

  <div class="row">
    <div class="col-md-4">
    @include('inc._sidebar')</div>
    <div class="col-md-8 p-2">
      <div class="container">
        <h1 style="font-family: Freckle Face;">Buy Stuff!</h1>
      <div class="row" style="height: 320px; width: 850px;">
          @foreach(App\Stock::all() as $item)
          <div class="merch col-sm-4 border border-secondary m-1">
            <div id="item" class="item">
              <img src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/' . $item->image) }}" style="height:240px; width:auto; margin:10px;"></img>
              <h3><strong>{{ $item -> itemName }}</strong></h3>
              <p><strong>Price:</strong> {{ $item -> price }}</p>
              @if($item->size)
              <p><strong>Size:</strong> {{ $item -> size }}</p>
              @endif
              <p><strong>Description:</strong> {{ $item -> description }}</p>
            </div>
            <div class="button mb-1 align-self-end">
              <!-- <a href="{{route('items.index', $item->id) }}" class="btn btn-sm btn-secondary" method="GET">View</a> -->
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection
