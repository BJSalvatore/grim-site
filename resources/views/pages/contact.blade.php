@extends('layouts.app')

@include('inc._navbar')

@section('content')

<img src="{{ asset('assets/images/converseRed.png') }}" style="width: 150px;"></img><h1>Contact</h1>
<p>Email the band at {{$bandemail}}</p>

<p>Mailing Address:</p>
<p>{{ $bandaddress['bandcontact'] }}</p>
<p>{{ $bandaddress['bandstreetaddress'] }}</p>
<p>{{ $bandaddress['bandcity'] }}, {{ $bandaddress['bandstate'] }} {{ $bandaddress['bandzip'] }}</p>
<p>{{ $bandaddress['bandcountry'] }}</p>

@endsection
@include('inc._footer')
