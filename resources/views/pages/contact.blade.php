@extends('layouts.app')

@include('inc._content')

@section('content')
  <p>Email: {{ $bandemail }}</p>
  <p>Phone: {{ $bandphone }}</p>
  <p>Mailing Address:</p>
  <p>{{ $bandaddress['bandcontact'] }}</p>
  <p>{{ $bandaddress['bandstreetaddress'] }}</p>
  <p>{{ $bandaddress['bandcity'] }}, {{ $bandaddress['bandstate'] }} {{ $bandaddress['bandzip'] }}</p>
  <p>{{ $bandaddress['bandcountry'] }}</p>
@endsection

@include('inc._footer')
