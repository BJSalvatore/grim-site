@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Shopping Cart')

@section('content')
<div id="content" class="mt-3 col-sm-6 col-md-8 offset-md-3 col-lg-6 offset-lg-3 col-xl-7 offset-xl-2">
    <h1 style="font-family: Freckle Face;">Shopping Cart</h1>
    <hr>
  <div class="row">
    <div class="col-12-lg">
    <p>When you are ready to place your order, please download the invoice file. Then email it to boboedy@yahoo.com.<br>
    We will then contact you to arrange for payment.<br><strong>Thanks for your purchase!</strong>
    <!-- </div>
    <div class="col-2-lg"> -->
      <img id="shoes" class="img-responsive float-right" src="{{ asset('assets/images/converseGray.png') }}"></img>
    </p>
    </div>
  </div>

@foreach ($cartItems as $cartItem)

  <div class="row">
    <div class="well col-12 p-4 mt-4">
      <h2><strong><center>The Grim Merchandise Invoice</center></strong></h2>
    <div class="col-7">
      <strong>Order No.:  </strong>{{ $cartItem -> id}}<br><br>
      <strong>Shipping Address:</strong></br>
      {{ $cartItem -> customerName}}</br>
      {{ $cartItem -> streetAddress}}</br>
      {{ $cartItem -> city }}, {{ $cartItem -> state }}<br>
      {{ $cartItem -> zipCode }}
    </div>
  <hr>
  <div class="row p-2 m-1" style="background-color: #818181 ;">
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
      <hr>
      <div class="col-2">
      <strong>Total</strong>
      </div>
    </div>
    <div class="col-2">
      {{ $cartItem -> subtotal }}
    </div>
    <div class="col-2">
      {{ $cartItem -> shipping }}
    </div>
    <hr>
    <hr>
    <div class="col-2">
    {{ $cartItem -> total }}
    </div>
  </div>
  </div>
@endforeach
  </div>
</div>
</div>
@endsection
