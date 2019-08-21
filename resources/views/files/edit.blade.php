@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Add Files')

@section('content')
<div class="container">
  <div calls="row">
    <div class="col-md-2"></div>
      <div class="col-md-9 mt-3">
        <h1>Edit File</h1>
          <div id="fileForm" class="form-group">
            <form method="POST" action="{{ action('FileController@update', $file -> id) }}" enctype="multipart/form-data">
              <div class="row">
                @csrf
                <div class="col-md-9">
                  <label class="mt-1" for="name">File Name</label>
                  <input class="form-control p-1" type="text" name="name" v-model="fileName" value="{{ $file -> name }}">
                  @if($errors->has('name'))
                    <h5 class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('name') }}</strong></h5>
                  @endif
                </div>
                <div class="col-md-9">
                  <label class="mt-1" for="name">Title</label>
                  <input class="form-control p-1" type="text" name="title" value="{{ $file -> title }}">
                  @if($errors->has('title'))
                    <h5 class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('title') }}</strong></h5>
                  @endif
                    <div class="mt-1 file is-info has-name">
                        <label class="file-label">
                            <input class="file-input" type="file" ref="file" name="file" value="{{ $file -> name . $file -> ext }}">
                            <span class="file-name" v-if="attachment.name" v-html="attachment.name"></span>
                            <button type="button" class="btn btn-sm btn-danger m-1">Cancel File Upload</button>
                        </label>
                    </div>
                </div>
                <div class="col-md-9">
                    <button type="submit" class="button is-primary">
                        Update
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
