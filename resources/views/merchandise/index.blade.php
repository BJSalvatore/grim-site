@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Inventory')

@section('content')
<div class="row mt-3" style="margin-bottom: 80px;">
  <div class="col-lg-12">
    <div class="col-lg-8 offset-lg-2">
    <h1>Inventory</h1>
    <table id="merchandise" class="table">
    <a href="{{ route('items.create') }}" class="btn btn-lg btn-block btn-secondary m-1">Add New Item</a>
      <thead>
        <th>Order #</th>
        <th>Name</th>
        <th>Address</th>
        <th>City & State</th>
        <th>Zip</th>
        <th>Date</th>
      </thead>
      <tbody>
        <tr>
          <th>{{ $cart -> id }}</th>
          <th>{{ $cart -> customerName }}</th>
          <th>{{ $cart-> streetAddress }}</th>
          <td>{{ $cart -> city }}, {{$cart -> state}}</td>
          <td>{{ $cart -> zipCode }}</td>
          <td>{{ date('M j, Y', strtotime($cart->created_at)) }}</td>
          <td>
          <hr>
          @foreach($cartItems as $cartItem)
          <th>{{ $cartItem -> itemName }}</th>
          <th>{{ $cartItem -> size }}</th>
          <th>{{ $cartItem-> quantity }}</th>
          <th>{{ $cartItem-> price }}</th>
          @endforeach
          <hr>
          <th>{{ $cartItem -> subtotal }}</th>
          <th>{{ $cartItem -> shipping }}</th>
          <th>{{ $cartItem-> total }}</th>
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection
