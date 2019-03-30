@extends('layouts.app')
@include('inc._navbar')

@section('title', '| View All Files')

@section('content')
<img src="" :src="'{{ asset('storage/' . Auth::user()->name
. '_' . Auth::id()) }}' + '/' + file.type + '/' + file.name
+ '.' + file.extension" :alt="file.name">

<!-- <div class="modal-background" @click="closeModal()"></div> -->

<button class="modal-close is-large" aria-label="close"
@click="closeModal()"></button>

@endsection
