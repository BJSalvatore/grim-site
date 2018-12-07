<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Buy Stuff')

@extends('layouts.app')

@include('inc._header')

@section('content')

<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-4">
    @include('inc._sidebar')</div>
    <div class="col-lg-8">
      <div class="container" style="width: 800px;">
      <div class="row" style="height: 20px"></div>
      <div class="row" style="height: 320px">
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/grim_cop_killer.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/cop_killer_ep.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
              <img src="{{ asset('assets/images/TheGrimNuclearWorldOrder.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
      </div>
      <div class="row" style="height: 20px"></div>
      <div class="row" style="height: 320px">
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/face_of_betrayal.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/orange_album.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/best_of_album.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
      </div>
      <div class="row" style="height: 20px"></div>
      <div class="row" style="height: 320px">
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/pins_black_orange.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/pins_blue_white.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/pins_purple.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
      </div>
      <div class="row" style="height: 20px"></div>
      <div class="row" style="height: 320px">
          <div class="merch col-sm-4 border border-secondary">
            <img src="{{ asset('assets/images/merch/b&w_patch.jpg') }}" style="width: auto; height: 240px; padding: 5px;"></img>
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
            <!-- <img src="{{ asset('assets/images/merch/pins_blue_white') }}" style="width: auto; height: 240px;"></img> -->
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
          <div class="merch col-sm-4 border border-secondary">
            <!-- <img src="{{ asset('assets/images/merch/pins_purple.jpg') }}" style="width: auto; height: 240px;"></img> -->
            <div class="item">
              Item:<br>
              Price:
            </div>
          </div>
      </div>
    </div>
    </div>
  </div>
</div>

@endsection
