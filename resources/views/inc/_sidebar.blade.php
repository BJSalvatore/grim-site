<div class="px-3">
<div id="sidebar" class="mx-auto text-center text-light bg-dark d-none d-sm-block d-md-block d-lg-block">
  <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="col justify-content-center">
              <p>New Release!</p>
              <img id="newLP" class="img-responsive" src="{{ asset('assets/images/TheGrimNuclearWorldOrder.jpg') }}"></img>
          <p>Cop Killer</p>
          <div id="audio" class="d-flex text-center">
            <audio controls class="embed-responsive">
                <source id="audioSource" type="audio/mp3" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/audio/the-grim_the-grim-cop-killer-7-inch.mp3')}}">
                <script src="https://sdk.amazonaws.com/js/aws-sdk-2.410.0.min.js"></script>
            </audio>
          </div>
        </div>
        <div class="col justify-content-center">
          <div class="row">
               <p>Upcoming Shows</p>
          </div>
              <div id="calendar" class="embed-responsive justify-content-center" data-tockify-height="420px" data-tockify-component="mini" data-tockify-calendar="thegrimband"></div>
              <script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
            </div>
        <div class="col-sm d-sm-block d-md-block d-lg-block d-xl-block">
            <img id="recordLabelLogo" class="img-responsive mt-3 mb-3" src="{{ asset('assets/images/SoundSpeedRecordsLogo.jpg') }}"></img>
        </div>
  </div>
</div>
