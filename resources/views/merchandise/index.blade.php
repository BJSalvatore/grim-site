@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Inventory')

@section('content')
<div class="container mt-3 mb-4">
<div class="row">
  <div class="col-lg-12">
    <h1>Inventory</h1>
    <table class="table">
    <a href="{{ route('items.create') }}" class="btn btn-lg btn-block btn-secondary m-1">Add New Item</a>
      <thead>
        <th>#</th>
        <th>Item Name</th>
        <th></th>
        <th>Description</th>
        <th>Size</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>User</th>
        <th>Created On</th>
      </thead>
      <tbody>
        @foreach($items as $item)
        <tr>
          <th>{{ $item-> id }}</th>
          <th>{{ $item-> itemName }}</th>
          <th><img src="{{ asset('storage/app/public/merch/' . $item -> image) }}" height="150" width="auto"></img></th>
          <th><h6>{{ $item-> description }}</h6></th>
          <td>{{ $item -> size }}</td>
          <td>{{ $item -> quantity }}</td>
          <th>{{ $item-> price }}</th>
          <td>{{ $item-> user_id }}</td>
          <td>{{ date('M j, Y', strtotime($item->created_at)) }}</td>
          <td>
            <a href="{{ route('items.show', $item -> id)}}" class="btn btn-block btn-secondary" method="GET">View</a><br>
            <a href="{{ route('items.edit', $item -> id)}}" class="btn btn-block btn-light" method="GET">Edit</a><br>
            <a href="{{ route('items.destroy', $item->id) }}" class="btn btn-danger btn-block" method="DELETE">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection
