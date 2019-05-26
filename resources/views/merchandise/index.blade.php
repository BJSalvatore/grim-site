@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Inventory')

@section('content')
<div class="container mt-3" style="margin-bottom: 80px;">
  <div class= "row">
    <div class ="col-lg-12">
    <h1>Inventory</h1>
      <a href="{{ route('items.create') }}" class="btn btn-lg  btn-block btn-secondary m-1">Add New Item</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
    <table-responsive>
    <table id="merchandise" class="table">
      <thead>
        <th>#</th>
        <th>Image</th>
        <th>Item</th>
        <th>Description</th>
        <th>Price</th>
        <th>Size</th>
        <th>Quantity</th>
      </thead>
      <tbody>
        <tr>
          @foreach($items as $item)
          <td>{{ $item -> id }}</td>
          @if($item -> image )
            <td><img src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/' . $item->image)}}" height="150" width="auto"></img></td>
          @else
            <td>No Image</td>
          @endif
          <td>{{ $item -> itemName }}</td>
          <td>{{ $item-> description }}</td>
          @if($item -> size !== null)
            <td>{{ $item -> size}}</td>
          @endif
          <td>{{ $item -> quantity }}</td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </table-responsive>
  </div>
</div>
  </div>

@endsection
