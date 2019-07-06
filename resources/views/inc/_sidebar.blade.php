<div class="px-3">
  <div id="sidebar" class="mx-auto text-center text-light bg-dark d-none d-sm-block d-md-block d-lg-block">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid mt-2">
      <div class="col">
        <p>New Release!</p>
        <img id="newLP" class="img-responsive" src="{{ asset('images/TheGrimNuclearWorldOrder.jpg') }}"></img>
      <center><p>Cop Killer</p></center>
      <div id="audio" class="d-flex text-center">
        <audio controls class="embed-responsive">
            <source id="audioSource" type="audio/mp3" src="{{ asset('https://s3.amazonaws.com/grim-images/audio/the-grim_the-grim-cop-killer-7-inch.mp3')}}">
            <script src="https://sdk.amazonaws.com/js/aws-sdk-2.410.0.min.js"></script>
        </audio>
      </div>
    </div>
  </div>
    <div class="container-fluid text-center justify-content-center mt-3">
      <div class="col">
      <p>Upcoming Shows</p>
          <div id="calendar" class="embed-responsive justify-content-center" data-tockify-component="mini" data-tockify-calendar="thegrimband"></div>
          <script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
      </div>
    </div>
      <div class="col-sm d-none d-md-block d-lg-block d-xl-block">
          <img id="recordLabelLogo" class="img-responsive mt-3 mb-3" src="{{ asset('images/SoundSpeedRecordsLogo.jpg') }}"></img>
      </div>
  </div>
</div>
