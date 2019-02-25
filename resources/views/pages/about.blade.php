<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| About')

@extends('layouts.app')
@include('inc._header')

@section('content')
  <div class = "d-flex flex-row">
    <div class="col-4">@include('inc._sidebar')</div>
    <div class="col-9 p-4">
      <h1 style="font-family: Freckle Face;">Stuff goes here</h1>
      <p>Mel fabulas voluptaria ex. No eam novum homero, cum delectus consequat at. In quod nonumy reprehendunt cum, mel congue diceret perpetua te. Euismod mandamus in mel, sit ea persius deterruisset.<br><br>
      Dolorum detracto dissentiet vix ei, ipsum clita omittantur ius ea. In sea brute scaevola, ad mea nibh solet officiis. Quis possim appellantur qui ad, alia accumsan ea mei. Id ignota vituperata sea, quidam euismod at sea. Mea ad posse omnium.<br><br>
      Lorem ipsum dolor sit amet, te zril menandri sit, posse accumsan qui ei. Legimus fastidii quaerendum sit at. Appetere legendos necessitatibus nec ne. Solet salutatus intellegat pro ex, erat salutatus efficiantur sit ut, quando accusamus vim no. Dolore numquam partiendo ad mel, an est veniam soleat, his ne reque nostrud. In iuvaret atomorum omittantur has, vocibus praesent ea ius.<br><br>
      Id mel vidisse invenire. Eu atqui movet omnium mel, eu pri meis accusata, no usu tincidunt voluptaria consectetuer. No eos euismod ceteros incorrupte. Solum volumus ad has, te mei paulo omittam interpretaris. Nam tollit euismod ea, voluptua sensibus vis et, ex errem inermis vis. Duo ludus feugait aliquando ne, nam ex vide recteque argumentum.</p>
    </div>
    <div class="col">
      <div id="animatedShoes" class="container d-inline-flex" style="margin-top: -100px;">
      <div class="float-right">
          <img src="{{ asset('assets/images/converseGray.png') }}" class="img" style="width: 200px; margin-bottom: 20px;"></img>
      </div>
    </div>
  </div>
@endsection
