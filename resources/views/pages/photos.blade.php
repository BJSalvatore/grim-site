<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Photos')

@extends('layouts.app')
@include('inc._header')

@section('content')

    <div class="d-flex flex-row">
        <div class="col-4">
            @include('inc._sidebar')</div>
            <div class="col-lg-9 p-4">
                <h1 style="font-family: Freckle Face;">Photos</h1>
                <hr>
                <div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                    @foreach($files as $file)
                      @if($file-> type == 'jpg'||$file-> type == 'jpeg'||$file-> type == 'png'||$file-> type == 'gif'||$file-> type == 'svg')
                      <div class="item">
                        <img src="{{ asset('storage/app/public/files/' .  $file -> name . $file -> extension) }}"></img>
                     </div>
                     <div class="carousel-caption">
                         <h3>{{ $file -> title }}</h3>
                     </div>
                     @endif
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      </div>
    @endsection
