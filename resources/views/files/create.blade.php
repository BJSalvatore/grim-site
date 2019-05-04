@extends('layouts.app')
@include('inc._navbar')

@section('title', '| Add Files')

@section('content')
<div class="container">
  <div calls="row">
    <div class="col-md-2"></div>
      <div class="col-md-9 mt-3">
        <h1>Add a New File</h1>
          <div id="fileForm" class="form-group">
            <form method="POST" action="{{ action('FileController@store') }}" enctype="multipart/form-data">
              <div class="row">
                @csrf
                <div class="col-md-9">
                  <label class="mt-1" for="name">File Name</label>
                  <input class="form-control p-1" type="text" name="name" placeholder="Max 15 characters." v-model="fileName" required></p>
                  @if($errors->has('name'))
                    <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('name') }}</strong></p>
                  @endif
                </div>
                <div class="col-md-9">
                  <label class="mt-1" for="name">Title</label>
                  <input class="form-control p-1" type="text" name="title" placeholder="This title will be displayed with the file." required>
                  @if($errors->has('title'))
                    <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('title') }}</strong></p>
                  @endif
                    <label class="mt-1" for="file">File</label>
                    <input class="form-control p-1" name="file" type="file"></input>
                    @if($errors->has('file'))
                       <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('file') }}</strong></p>
                     @endif
                </div>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-secondary btn-md mt-2">
                        Add new file
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
