@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Shopping Cart')

@section('content')
<div id="content" class="mt-3 col-sm-6 col-md-8 offset-md-3 col-lg-6 col-xl-7">
    <h1 style="font-family: Freckle Face;">Shopping Cart</h1>
    <hr>
  <div class="row">
    <div class="col-lg-12">
    <div class="col-6-lg">
    <p>When you are ready to place your order, please download the invoice file.<br>Then email it to boboedy@yahoo.com.<br>
    We will then contact you to arrange for payment.<br><strong>Thanks for your purchase!</strong>
    </div>
      <img id="shoes" class="img-responsive float-right" style="margin-top: -160px;" src="{{ asset('assets/images/converseGray.png') }}"></img>
    </p>
  </div>
  <a href="{{ url('/shop') }}" class="btn btn-block btn-primary">Continue Shopping</a>
</div>

<form id="invoiceForm" class="mt-3" method="post" action="{{route('CartController@store')}}">
  {{csrf_field()}}
  <div class='form-group'>
    <label for="customerName" class="control-label">Full Name</label>
    <input type="text" class="form-control" id="customerName" name="customerName" placeholder="First & Last Name">
  </div>
  <div class='form-group'>
    <label for="streetAddress" class="control-label">Street Address</label>
    <input type="text" class="form-control" id="streetAddress" name="streetAddress" placeholder="Street Address">
  </div>
  <div class='form-group'>
    <label for="city" class="control-label">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="City">
  </div>
  <div class='form-group'>
    <label for="state" class="control-label">State</label>
    <input type="text" class="form-control" id="state" name="state" placeholder="State Abbreviation">
  </div>
  <div class='form-group'>
    <label for="zipCode" class="control-label">Zip code</label>
    <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip">
  </div>
  <div class='form-group'>
    <label for="phoneNumber" class="control-label">Phone Number</label>
    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
  </div>
</form>

@foreach ($cartItems as $cartItem)
  <div class="row">
    <div class="well col-12 p-4 mt-4">
      <h2><strong><center>The Grim Merchandise Invoice</center></strong></h2>

  <hr>
  <div class="row p-2 m-1" style="background-color: #818181;">
    <div class="col-6">
        <strong>ITEM</strong>
    </div>
    <div class="col-2">
      <strong>SIZE</strong>
    </div>
    <div class="col-2">
      <strong>QTY</strong>
    </div>
    <div class="col-2">
      <strong>PRICE</strong>
    </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-6">
        {{ $cartItem -> itemName }}
      </div>
      <div class="col-2">
        {{ $cartItem -> size }}
      </div>
      <div class="col-2">
        {{ $cartItem -> quantity }}
      </div>
      <div class="col-2">
        {{ $cartItem -> price }}
      </div>
  </div>
  <hr>
  <div class="row">
    <div id="totals" class="col-2 offset-8">
      <div class="col-2">
        <strong>Subtotal</strong>
      </div>
      <div class="col-2">
        <strong>Shipping</strong>
      </div>
      <div class="col-2">
      <strong>Total</strong>
      </div>
    </div>
    <div class="col-2">
    <div class="col-1">
      ${{ $cartItem -> subtotal }}
    </div>
    <div class="col-1">
      ${{ $cartItem -> shipping }}
    </div>
    <div class="col-1">
      ${{ $cartItem -> total }}
    </div>
  </div>
  </div>
@endforeach
  <a href="{{ action('CartController@downloadPDF', $id -> id)}}">Download PDF Invoice</a>
  </div>
</div>
</div>
@endsection
