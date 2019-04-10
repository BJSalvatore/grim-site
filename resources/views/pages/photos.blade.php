<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Photos')

@extends('layouts.app')
@include('inc._navbar')

@section('content')

    <div class="d-flex flex-row">
        <div class="col-4">
            @include('inc._sidebar')</div>
            <div class="col-lg-6 p-4">
                <h1 style="font-family: Freckle Face;">Photos</h1>
                <hr>
                <div id="myCarousel" class="carousel slide mt-3" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      @foreach($files as $file)
                        <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                      @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      @foreach($files as $file)
                        @if($file-> type == 'jpg'||$file-> type == 'jpeg'||$file-> type == 'png'||$file-> type == 'gif'||$file-> type == 'svg')
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                              <img class="d-block img-fluid" src="{{ asset('uploadedFiles/' .  $file -> file)}}">
                       <div class="carousel-caption d-none d-md-block">
                           <h3>{{ $file -> title }}</h3>
                       </div>
                      </div>
                       @endif
                     @endforeach
                   </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarouselControls" role="button" data-slide="prev">
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
