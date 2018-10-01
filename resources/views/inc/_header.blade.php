    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

@include('inc._navbar')

  <div class="header bg-white p-2">
    <img src="{{ asset('assets/images/converseOrange.png') }}" class="mb-2" style="width: 150px;"></img><h1>{{ $title }}</h1>
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
