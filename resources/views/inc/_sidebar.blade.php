<div id="sidebar" class="container-fluid text-light bg-dark justify-content-center mt-0">
        <div class="col-sm p-2">
              <p>New Release!</p>
              <img id="newLP" class="img-responsive" src="{{ asset('assets/images/TheGrimNuclearWorldOrder.jpg') }}"></img>
            <hr>
        <p>Song Title</p>
          <div id="audio" class="d-flex justify-content-center mb-3">
            <audio controls class="embed-responsive">
              <source src="{{ asset('public/audio/the-grim-cop-killer-7-inch.mp3') }}">
              <source src="{{ asset('public/audio/the-grim-cop-killer-7-inch.ogg') }}">
            </audio>
            <hr>
          </div>
        </div>
        <div id="calendar" class="col-sm p-2">
        <p>Upcoming Shows</p>
          <div class="embed-responsive" data-tockify-component="mini" data-tockify-calendar="thegrim"></div>
          <script data-cfasync="false" data-tockify-script="embed"
                                        src="https://public.tockify.com/browser/embed.js"></script>
        </div>
        <div class="col-sm d-none d-sm-none d-md-block d-lg-block p-4">
            <img id="logo" class="img-responsive" src="{{ asset('assets/images/SoundSpeedRecordsLogo.jpg') }}"></img>
        </div>
  </div>
