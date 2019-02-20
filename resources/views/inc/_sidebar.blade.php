  <link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css">

<div id="sidebar" class="d-flex text-light bg-dark align-content-center" style="height: 100%; margin-left: 0px; margin-bottom: 0px;">
  <div class="container">
        <h3>New Release!</h3>
        <img id="newLP" class="img-fluid p-0" src="{{ asset('assets/images/TheGrimNuclearWorldOrder.jpg') }}"></img>
      <hr>
      <h3>Featured Song</h3>
      <div class="embed-responsive" style="width: auto;">
        <audio controls>
          {{-- <source src="{{ asset('assets/audio/the-grim_the-grim-cop-killer-7-inch.mp3') }}" type="audio/mpeg"> --}}
        </audio>
      </div>
      <hr>
        <h3>Upcoming Shows</h3>
        <ul>
          <li><h5><a href="#">10/10/2018 @ This Place</a></h5></li>
          <li><h5><a href="#">10/22/2018 @ That Place</a><h5></li>
          <li><h5><a href="#">11/02/2018 @ The Other Place</a><h5></li>
        </ul>
          <img id="logo" class="d-flex img-responsive" src="{{ asset('assets/images/SoundSpeedRecordsLogo.jpg') }}"></img>
    </div>
</div>
