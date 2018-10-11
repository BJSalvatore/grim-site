<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Blog')

@extends('layouts.app')
@include('inc._header')

@section('content')

<div class="col-lg-12">
  <div class= "row">
    <div class="col-lg-4">@include('inc._sidebar')</div>
    <div class="col-lg-8">
      <div class="post mt-3">
        <h3 style="font-family: Freckle Face;">Post Title</h3>
        <p>Lorem ipsum dolor sit amet, dicat iudicabit te eos. Id est aliquid voluptua, eu eum latine splendide, no elit nemore vix. Qui error ceteros in, elitr dolore altera ne per, te usu vocent insolens laboramus. Duo apeirian prodesset signiferumque te, te quo iisque nominavi. Qui ex mentitum petentium. At eam esse iisque suscipiantur, cu mazim principes pri.</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
      <hr>
      <div class="post mt-3">
        <h3>Post Title</h3>
        <p>Mazim errem labitur mel eu, vel evertitur maiestatis id. Eos habeo nostro ea, et eos purto inimicus, vix alterum definiebas ut. Mel cu probo definitiones, at nostrum dissentiunt eos. Accusata eloquentiam repudiandae ea sed, nam ea minim argumentum eloquentiam. Et sed agam mazim ceteros.</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
      <hr>
      <div class="post mt-3">
        <h3>Post Title</h3>
        <p>Tantas periculis sea id. Cum duis altera te. Vel legere putent eu, mea et doming persius praesent. Sit lorem veniam euismod te, ea clita suavitate est. Duo velit virtute at. Sumo autem an per, odio inani mentitum pri an. Reque fabulas efficiendi eam ad, in sea munere regione delenit.</p>
        <a href='#' class="btn btn-primary">Read more</a>
      </div>
    </div>
  </div> <!-- end of row -->
</div> <!-- end of grid -->
@endsection
