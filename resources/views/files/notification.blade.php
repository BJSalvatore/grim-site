@extends('layouts.app')
@include('inc._navbar')

@section('title', '| View All Files')

@section('content')
<div class="notification is-success" v-cloak v-
if="!anyError()">

<button class="delete" @click="notification=false"></button>

@endsection
