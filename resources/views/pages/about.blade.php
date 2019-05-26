<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| About')

@extends('layouts.app')
@include('inc._header')
@section('content')
<!-- @include('inc._sidebar') -->
    <div id="content">
      <h1 style="font-family: Freckle Face;">Discography</h1>
      <table-responsive class="table-responsive">
        <table>
        <thead class="thead">
          <th></th>
          <th class="col no-gutters">Title</th>
          <th class="col no-gutters">Format</th>
          <th class="col no-gutters">Year</th>
          <th class="col no-gutters">Label</th>
        </thead>
        <tbody>
          <tr style="height: 10px;"></tr>
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/orange_album.jpg') }}"></img></td>
            <td>Getting Revenge In 'Merica'</td>
            <td class="format">12" LP</td>
            <td>1984</td>
            <td>Mystic Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/images/slimey-valley.jpg') }}"></img></td>
            <td>It Came From Slimey Valley</td>
            <td class="format">Vinyl, LP Compilation<br>Song - "Old Towne Mall"</td>
            <td>1984</td>
            <td>Ghetto-way Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/images/live-at-fenders.jpg') }}"></img></td>
            <td>Live At Fenders</td>
            <td class="format">7" EP</td>
            <td>1987</td>
            <td>Super Seven Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/images/live-to-die.jpg') }}"></img></td>
            <td>Live To Die</td>
            <td class="format">7" EP</td>
            <td>1987</td>
            <td>Super Seven Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/face_of_betrayal.jpg') }}"></img></td>
            <td>Face Of Betrayal</td>
            <td class="format">LP</td>
            <td>1988</td>
            <td>Alchemy Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/best_of_album.jpg') }}"></img></td>
            <td>Best Of ... The Grim</td>
            <td class="format">CD, Cassette, LP Compilation</td>
            <td>2011</td>
            <td>Mystic Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/cop_killer_ep.jpg') }}"></img></td>
            <td>Cop Killer</td>
            <td class="format">7" EP</td>
            <td>2017</td>
            <td>Felony Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
          <tr>
            <td><img id="thumbnail" class="d-flex img-responsive" src="{{ secure_asset('https://s3.amazonaws.com/grim-images/merch/NuclearWorldOrder.jpg') }}"></img></td>
            <td>Nuclear World Order</td>
            <td class="format">Full length LP</td>
            <td>2018</td>
            <td>Sound Speed Records</td>
          </tr>
          <!-- <tr style="height: 10px;"></tr> -->
        </tbody>
      </table-responsive>
    </table>
</div>
@endsection
