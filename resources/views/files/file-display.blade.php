@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Show Files')

@section('content')
<div class="container">
<div class="row">
  <div class="col-lg-12">
    <h1>All Image, Video & Audio Files</h1>
    <a href="{{ route('files.add') }}" class="btn btn-lg btn-block btn-secondary m-1">Add New Files</a>
    <table class="table">
      <thead>
        <th>#</th>
        <th>Title</th>
        <th>Type</th>
        <th>File</th>
        <th>User ID</th>
        <th>Created On</th>
        <th></th>
      </thead>
      <tbody>
        @foreach($files as $file)
        <tr>
          <th>{{ $file-> id }}</th>
          <th>{{ $file-> title }}</th>
          <td>{{ $file -> type }}</td>
          <td>@if($file->type == 'jpg')
            <img src="{{ asset($file->file)}}" height="150" width="auto"> </img>
          @else
            This is a {{$file -> type}} file.
          @endif</td>
          <td>{{ $file-> user_id }}</td>
          <td>{{ date('M j, Y', strtotime($file->created_on)) }}</td>
          <!-- <td>{{ date('M j, Y', strtotime($file->updated_at)) }}</td> -->
          <td>
            <a href="{{ route('files.show', $file -> id)}}" class="btn btn-sm btn-secondary m-1" method="GET">View</a>
            <a href="{{ route('files.edit', $file -> id)}}" class="btn btn-sm btn-light m-1" method="GET">Edit</a>
            <a action="{{ route('files.destroy', $file->id) }}" class="btn btn-danger btn-sm" method="DELETE">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex flex-row align-items-center justify-content-center">
      {{$files -> links()}}
    </div>
    <div class="d-flex flex-row align-items-center justify-content-center">
      Page {{$files->currentPage()}} of {{$files->lastPage()}}
    </div>
  </div>
</div>
</div>
@endsection
