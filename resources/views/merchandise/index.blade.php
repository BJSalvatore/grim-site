@extends('layouts.app')
@include('inc._navbar')
@section('title', '| Inventory')

@section('content')
<div class="container mt-3">
  <div class= "row">
    <div class ="col-lg-12">
    <h1>Inventory</h1>
      <a href="{{ route('items.create') }}" class="btn btn-lg btn-block btn-primary">Add New Item</a>
      <hr>
    <table-responsive>
    <table id="merchandise" class="table mt-3">
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
          @foreach($items as $item)
          <tr>
          <td>{{ $item -> id }}</td>
          @if($item -> image )
            <td><img src="{{ asset('https://s3.amazonaws.com/grim-images/merch/' . $item->image)}}" height="150" width="auto"></img></td>
          @else
            <td>No Image</td>
          @endif
          <td>{{ $item -> itemName }}</td>
          <td>{{ $item-> description }}</td>
          <td>{{ $item -> price }}</td>
          <td>{{ $item -> size}}</td>
          <td>{{ $item -> quantity }}</td>
        </tr>
          @endforeach
      </tbody>
    </table>
  </table-responsive>
  </div>
</div>
</div>

@endsection
