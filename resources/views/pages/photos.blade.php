@section('title', '| Photos')

@extends('layouts.app')

@include('inc._header')

@section('content')

<style>
    .carousel-inner .item img {
        margin: 0 auto;
    }
</style>

    <div class="d-flex flex-row">
        <div class="col-4">
            @include('inc._sidebar')</div>
            <div class="col-lg-9 p-4">
                <h1 style="font-family: Freckle Face;">Photos</h1>
                <hr>
                <div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
                    <!-- Indicators -->
                    {{-- <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol> --}}
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="carousel-item-active">
                            <img src="{{asset('assets/images/MainPic.png')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Title</h3>
                                <p>Photo by</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/Bob Oedy photo by Jason Berkman.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Bob Oedy</h3>
                                <p>Photo by Jason Berkman</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/EvilTracy1.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Title</h3>
                                <p>Photo by Evil Tracy</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/EvilTracyPicBob.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Title</h3>
                                <p>Photo by Evil Tracy</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/IMG_0063.JPG')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Title</h3>
                                <p>Photo by</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/PrettyInPink.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Title</h3>
                                <p>Photo by</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/TheGrimAtRegalinn.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Title</h3>
                                <p>Photo by</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/TheGrimatWarpedTour2018.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Title</h3>
                                <p>Photo by</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/TheGrimByTonyFRomo.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>The Grim</h3>
                                <p>Photo by Tony F Romo</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/TheGrimEarlyDays.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>Early Days</h3>
                                <p>Photo </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/images/TheGrimColorByJasonCook.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3>The Grim</h3>
                                <p>Photo by Tony F Romo</p>
                            </div>
                        </div>
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
