  <link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css">

<div id="sidebar" class="d-flex text-light bg-dark align-content-center mt-3">
  <div class="container p-4">
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
        <div data-tockify-component="mini" data-tockify-calendar="thegrim"></div>
<script data-cfasync="false" data-tockify-script="embed"
                                  src="https://public.tockify.com/browser/embed.js"></script>

          <img id="logo" class="d-flex img-responsive" src="{{ asset('assets/images/SoundSpeedRecordsLogo.jpg') }}"></img>
    </div>
</div>
