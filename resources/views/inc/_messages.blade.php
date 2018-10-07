<div id="messages" class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-9">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      <strong>Success:</strong> {{ Session::get('success') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      <strong>Error:</strong>
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
    @endif
    </div>
  </div>
</div>
