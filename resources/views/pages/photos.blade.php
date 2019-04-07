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

                    <?php foreach($files as $file){ ?>
                      if($file-> type == 'jpg'||$file-> type == 'jpeg'||$file-> type == 'png'||$file-> type == 'gif'||$file-> type == 'svg')
                      <div class="item <?php echo ($key == 0) ? "active" : ""; ?> ">
                        <img src="{{ asset('storage/app/public/files/' .  $file -> name . $file -> extension) }}"></img>
                          <!-- <img src="/storage/files/ . "." . <?php  echo $file['file']; ?>" alt="Image of every carousel"/> -->
                     </div>
                     <div class="carousel-caption">
                         <h3>{{ $file -> title }}</h3>
                     </div>
                     endif
                   <?php } ?>
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
    @endsection
