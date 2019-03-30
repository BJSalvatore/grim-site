@extends('layouts.app')
@include('inc._navbar')

@section('title', '| View All Files')

@section('content')
<transition name="modal">
<div class="modal-mask" v-if="showConfirm" v-cloak>
...
</div>
</transition>

<button class="button" @click="deleteFile()">
Confirm
</button>

<button class="button" @click="cancelDeleting()">
Cancel
</button>

@endsection
