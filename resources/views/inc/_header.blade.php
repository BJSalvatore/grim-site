
@include('inc._navbar')
  <div class="header" style="background-color: #FF8C00; z-index: 1">
   <div class="row">
    <div class="col-8">
      <div class="toggle-content">
      <h1>{{ $header_title }}</h1>
      </div>
      <!-- <p>Stuff here...</p> -->
    </div>
    <div class="col-4 offset-8 d-none d-sm-block d-md-block d-lg-block d-xl-block">
      <img id="shoes" class="float-right" src="{{ asset('assets/images/converseGray.png') }}"></img>
    </div>
  </div>
  </div>
