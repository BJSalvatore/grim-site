{{-- <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}"> --}}

@include('inc._navbar')
  <div class="header" style="background-color: #FF8C00; padding: 40px;">
      <h1>{{ $title }}</h1>
      <p>Stuff here...</p>
      <div class="float-right">
          <img src="{{ asset('assets/images/converseGray.png') }}" class="m-4" style="width: 200px;"></img>
      </div>
  </div>
