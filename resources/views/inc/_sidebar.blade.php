  <link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css">

<div id="sidebar" class="container text-light bg-dark align-content-center mt-3">
  <div class="flex-row">
    <div class="p-2">
          <h3>New Release!</h3>
          <img id="newLP" class="img-fluid p-0" src="{{ asset('assets/images/TheGrimNuclearWorldOrder.jpg') }}"></img>
        <hr>
    </div>
    <div class="p-2">
    <h3>Song Title</h3>
    </div>
    <div id="audio" class="d-flex embed-responsive mb-3">
      <audio controls>
        <source src="{{ asset('public/audio/the-grim-cop-killer-7-inch.mp3') }}">
        <source src="{{ asset('public/audio/the-grim-cop-killer-7-inch.ogg') }}">
      </audio>
      <hr>
    </div>
    <div class="p-2">
      <h3>Upcoming Shows</h3>
      <div data-tockify-component="mini" data-tockify-calendar="thegrim"></div>
      <script data-cfasync="false" data-tockify-script="embed"
                                    src="https://public.tockify.com/browser/embed.js"></script>
    </div>
      <div class="p-4">
          <img id="logo" class="img-responsive align-self-center" src="{{ asset('assets/images/SoundSpeedRecordsLogo.jpg') }}"></img>
    </div>
  </div>
</div>
