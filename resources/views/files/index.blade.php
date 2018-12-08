@extends('layouts.app')
@include('inc._navbar')

@section('title', '| View All Files')

@section('content')
<div class="container">
<div class="row">
  <div class="col-lg-12">
      <h1>All Image, Video & Audio Files</h1>
      <a href="{{ route('files.create') }}" class="btn btn-lg btn-block btn-secondary m-1">Upload New File</a>
  </div>
    <div class="col-lg-12"><hr></div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Name</th>
          <th>Type</th>
          <th>Created At</th>
          <th></th>
        </thead>
        <tbody>
          @foreach($files as $file)
          <tr>
            <th>{{ $file->id }}</th>
            <td>{{ $file->name }}</td>
            <td>{{ $file->created_at}}</td>
            <!-- {{ <td>{{ substr($file -> file,0, 50) }}{{ strlen($post->post > 50 ? "..." : "") }}</td> --}} -->
            <td>{{ $file->created_at }}</td>
            <td>
              <a href="{{ route('files.index', $file -> id)}}" class="btn btn-sm btn-secondary m-1">View</a>
            <form method="PUT">
              <a href="{{ route('files.edit', $file -> id)}}" class="btn btn-sm btn-light m-1">Edit</a>
            </form>
              <form action="{{ route('files.destroy', $file->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex flex-row align-items-center justify-content-center">
        {{$posts -> links()}}
      </div>
      <div class="d-flex flex-row align-items-center justify-content-center">
        Page {{$files->currentPage()}} of {{$files->lastPage()}}
      </div>
    </div>
  </div>
</div>
  @endsection
