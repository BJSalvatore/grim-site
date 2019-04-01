<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| About')

@extends('layouts.app')
@include('inc._header')

@section('content')
  <div class = "d-flex flex-row">
    <div class="col-4">@include('inc._sidebar')</div>
    <div class="row">
    <div class="col-lg-8 mt-3">
      <h1 style="font-family: Freckle Face;">Discography</h1>
      <table class="table">
        <thead>
          <th></th>
          <th>Title</th>
          <th>Format</th>
          <th>Year</th>
          <th>Label</th>
        </thead>
        <tbody>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ asset('assets/images/merch/orange_album.jpg') }}"></img></td>
            <td>Getting Revenge In 'Merica'</td>
            <td>12" LP</td>
            <td>1984</td>
            <td>Mystic Records</td>
          </tr>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ asset('assets/images/slimey-valley.jpg') }}"></img></td>
            <td>It Came From Slimey Valley</td>
            <td>Vinyl, LP Compilation<br>Song - "Old Towne Mall"</td>
            <td>1984</td>
            <td>Ghetto-way Records</td>
          </tr>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive"></img>No Image</td>
            <td>Live At Fenders</td>
            <td>7" EP</td>
            <td>1987</td>
            <td>Super Seven Records</td>
          </tr>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive">No Image</img></td>
            <td>Live To Die</td>
            <td>7" EP</td>
            <td>1987</td>
            <td>Super Seven Records</td>
          </tr>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ asset('assets/images/merch/face_of_betrayal.jpg') }}"></img></td>
            <td>Face Of Betrayal</td>
            <td>LP</td>
            <td>1988</td>
            <td>Alchemy Records</td>
          </tr>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ asset('assets/images/merch/best_of_album.jpg') }}"></img></td>
            <td>Best Of ... The Grim</td>
            <td>CD, Cassette, LP Compilation</td>
            <td>2011</td>
            <td>Mystic Records</td>
          </tr>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ asset('assets/images/merch/cop_killer_ep.jpg') }}"></img></td>
            <td>Cop Killer</td>
            <td>7" EP</td>
            <td>2017</td>
            <td>Felony Records</td>
          </tr>
          <td><img id="thumbnail" class="d-flex img-responsive" src="{{ asset('assets/images/TheGrimNuclearWorldOrder.jpg') }}"></img></td>
            <td>Nuclear World Order</td>
            <td>Full length LP</td>
            <td>2018</td>
            <td>Sound Speed Records</td>
          </tr>
          <td></td>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
