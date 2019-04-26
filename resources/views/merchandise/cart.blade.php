@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Shopping Cart')

<div id="content" class="mt-3">
<div id="cart" class="col-sm-6 col-md-8 offset-md-3 col-lg-6 offset-lg-3 col-xl-7 offset-xl-2">
    <h1 style="font-family: Freckle Face;">Shopping Cart</h1>
    <hr>
    <div class="row">
      <div class="col-6">
    <p>When you are ready to place your order, please download the invoice file. Then email it to boboedy@yahoo.com.<br>
    We will then contact you to arrange for payment.<br>Thanks for your purchase!</p>
    </div>
    <hr>
@section('content')

@foreach ($cartItems as $cartItem)
  {{ $cartItem -> customerName}}
  {{ $cartItem -> streetAddress}}
  {{ $cartItem -> city }}
  {{ $cartItem -> state }}
  {{ $cartItem -> zipCode }}

  <hr>

    {{ $cartItem -> itemName}}
    {{ $cartItem -> size}}
    {{ $cartItem -> quantity}}
    {{ $cartItem -> price}}

  <hr>
<p><strong>Subtotal</strong></p>{{ $cartItem -> subtotal }}
<p><strong>Shipping</strong></p>{{ $cartItem -> shipping }}
<hr>
<p><strong>Total</strong></p>{{ $cartItem -> total }}
  @endforeach
</div>
</div>
@endsection
