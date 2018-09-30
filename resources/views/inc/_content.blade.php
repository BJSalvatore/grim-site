    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

@include('inc._navbar')

  <div class="jumbotron">
    <img src="{{ asset('assets/images/converseRed.png') }}" style="width: 150px;"></img><h1>{{ $title }}</h1>
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>

  <!-- <div class="d-flex-row justify-content-center align-content-start border-secondary">
    <div class="col-2">
      @include('inc._sidebar')
    </div>
    <div class="col-lg-10">
      @section('content')
    </div>
  </div> -->
  @yield('content')
