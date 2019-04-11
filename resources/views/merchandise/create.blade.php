@extends('layouts.app')
@include('inc._adminNavbar')

@section('title', '| Add Inventory')

@section('content')
<div class="container">
  <div calls="row">
    <div class="col-md-2"></div>
      <div class="col-md-9 mt-3">
        <h1>Add a New Item to Inventory</h1>
          <div id="fileForm" class="form-group">
            <form method="POST" action="{{ action('StockController@store') }}" enctype="multipart/form-data">
              <div class="row">
                @csrf
                <div class="col-md-9">
                  <label class="mt-1" for="itemName">Item Name</label>
                  <input class="form-control p-1" type="text" name="itemName" v-model="itemName" required></p>
                  @if($errors->has('itemName'))
                    <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('itemName') }}</strong></p>
                  @endif
                </div>
                <div class="col-md-9">
                  <label class="mt-1" for="price">Price</label>
                  <input class="form-control p-1" type="text" name="price" required>
                  @if($errors->has('price'))
                    <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('price') }}</strong></p>
                  @endif
                  <label class="mt-1" for="description">Description</label>
                  <input class="form-control p-1" type="text" name="description" required>
                  @if($errors->has('description'))
                    <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('description') }}</strong></p>
                  @endif
                  <label class="mt-1" for="size">Size</label>
                  <input class="form-control p-1" name="size" type="text" placeholder="Leave blank if no size."></input>
                  @if($errors->has('size'))
                     <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('size') }}</strong></p>
                   @endif
                   <label class="mt-1" for="size">Quantity</label>
                   <input class="form-control p-1" name="quantity" type="text"></input>
                   @if($errors->has('quantity'))
                      <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('quantity') }}</strong></p>
                    @endif
                    <label class="mt-1" for="image">Image</label>
                    <input class="form-control p-1" name="image" type="file"></input>
                    @if($errors->has('image'))
                       <p class="alert alert-danger mt-1" role="alert"><strong>{{ $errors->first('image') }}</strong></p>
                     @endif
              </div>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-secondary btn-md mt-2">
                        Add new item
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
