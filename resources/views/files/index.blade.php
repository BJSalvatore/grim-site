@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Files')

@section('content')
<div class="container mt-3">
<div class="row">
  <div class="col-lg-12">
    <h1>All Image, Video & Audio Files</h1>
    <table class="table">
      <a href="{{ route('files.create') }}" class="btn btn-lg btn-block btn-secondary m-1">Add New Files</a>
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Title</th>
        <th>File</th>
        <th>File Type</th>
        <th>User ID</th>
        <th>Created On</th>
        <th></th>
      </thead>
      <tbody>
        @foreach($files as $file)
        <tr>
          <th>{{ $file-> id }}</th>
          <th>{{ $file-> name }}</th>
          <th>{{ $file-> title }}</th>
          <td>@if($file-> type == 'jpg'||$file-> type == 'jpeg'||$file-> type == 'png'||$file-> type == 'gif'||$file-> type == 'svg')
            <img src="{{ asset('storage/app/public/files/' .  $file -> name . $file -> extension) }}" height="150" width="auto"></img>
          @elseif($file-> type == 'mp3'||$file-> type == 'ogg'||$file-> type == 'mpga')
            <i class="fas fa-file-audio fa-7x"></i>
          @elseif($file-> type == 'doc'||$file-> type == 'docx'||$file-> type == 'pdf'||$file-> type == 'odt')
          <i class="fas fa-file-alt fa-7x"></i>
          @elseif($file-> type == 'mp4'||$file-> type == 'mpeg')
          <i class="fas fa-file-video fa-7x"></i>
          @endif
        </td>
          <td>{{ $file-> type }}</td>
          <td>{{ $file-> user_id }}</td>
          <td>{{ date('M j, Y', strtotime($file->created_at)) }}</td>
          <td>
            <a href="{{ route('files.edit', $file -> id)}}" class="btn btn-sm btn-light m-1" method="GET">Edit</a><br>
          <a href="{{ route('files.destroy', $file->id) }}" class="btn btn-danger btn-sm" method="DELETE">Delete</a>
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
