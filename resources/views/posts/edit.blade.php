
@section('title', '| Edit Post')

@extends('layouts.app')
@include('inc._navbar')

@section('content')
<div class="col-lg-12">
  <div class= "row">
    <div class="col-lg-4">@include('inc._sidebar')</div>
    <div class="col-lg-6">
      {{ Form::model($post, ['route' => ['posts.edit', $post->id]]) }}
        <h3 class="m-2">Title:</h3>
        {{ Form::text('title', null, ["class" => 'form-control form-control-lg']) }}
        <h3 class="m-2">Post:</h3>
        {{ Form::textarea('post', null, ["class" => 'form-control']) }}
    </div>
    <div class="col-lg-2">
      <div class="container bg-secondary p-4">
        <h6>Created on:</h6>
        <p>{{ $post -> created_at }}</p>
        <h6>Updated on:</h6>
        <p>{{ $post -> updated_at }}</p>
        <a href="{{ route('posts.show', $post -> id)}}" class="btn btn-block btn-danger m-1">Cancel</a>
        <button type="submit" action="{{ route('posts.update', 'PostController@update') }}" class="btn btn-block btn-success" value="Save Changes">Save Changes</button>
        {{-- {{ Form::submit('Save Changes', ["class" => 'btn btn-block btn-success']) }} --}}
        </div>
    </div>
      <hr>
      {{!! Form::close() !!}}
  </div> <!-- end of row -->
</div> <!-- end of grid -->
@endsection
