  <link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css">

<div class="d-flex justify-content-center text-light bg-dark" style="height: 100%;">
    <div class="container justify-content-center" >
        <h3>New Release!</h3>
        <img id="newLP" class="img-fluid p-0" src="{{ asset('assets/images/TheGrimNuclearWorldOrder.jpg') }}"style="max-width: 280px; height: auto;"></img>
      <hr>
      <h3>Cop Killer</h3>
      <audio controls>
        {{-- <source src="{{ asset('assets/audio/the-grim_the-grim-cop-killer-7-inch.mp3') }}" type="audio/mpeg"> --}}
      </audio>
      <hr>
        <h3>Upcoming Shows</h3>
        <ul>
          <li><h5><a href="#">10/10/2018 @ This Place</a></h5></li>
          <li><h5><a href="#">10/22/2018 @ That Place</a><h5></li>
          <li><h5><a href="#">11/02/2018 @ The Other Place</a><h5></li>
        </ul>
        <img id="logo" class="img-fluid" src="{{ asset('assets/images/SoundSpeedRecordsLogo.jpg') }}" style="max-width: 280px; height: auto;"></img>
    </div>
</div>
