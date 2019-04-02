@section('title', '| Inventory')

@extends('layouts.app')

@include('inc._header')

@section('content')
<div class="container mt-3">
<div class="row">
  <div class="col-lg-12">
    <h1>All Image, Video & Audio Files</h1>
    <table class="table">
      <thead>
        <th>#</th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Size</th>
        <th>Quantity</th>
        <th>Created On</th>
        <th></th>
      </thead>
      <tbody>
        @foreach(items as $item)
        <tr>
          <th>{{ $item-> itemName }}</th>
          <th>{{ $item-> price }}</th>
          <th>{{ $item-> description }}</th>
          <td>{{ $item -> size }}</td>
          <td>{{ $item -> quantity }}</td>
          <td>
            <img src="{{ $item -> image }}" height="200" width="auto"></img>
          </td>
          <td>{{ $item-> user_id }}</td>
          <td>{{ date('M j, Y', strtotime($item->created_at)) }}</td>
          <td>
            <a href="{{ route('files.edit', $file -> id)}}" class="btn btn-sm btn-light m-1" method="GET">Edit</a><br>
            <a href="{{ route('files.destroy', $file->id) }}" class="btn btn-danger btn-sm" method="DELETE">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{ route('files.create') }}" class="btn btn-lg btn-block btn-secondary m-1">Add New Files</a>
    <div class="d-flex flex-row align-items-center justify-content-center">
      {{$items -> links()}}
    </div>
    <div class="d-flex flex-row align-items-center justify-content-center">
      Page {{$items->currentPage()}} of {{$items->lastPage()}}
    </div>
  </div>
</div>
</div>


@endsection
