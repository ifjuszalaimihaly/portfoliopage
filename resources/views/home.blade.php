@extends('master')
@section('title')
    Szalai Mihály bemutatkozó oldala
@endsection
@section('content')
    @include('partials.navbar')
    <div class="container" id="content">
        @include('partials.aboutme')
    </div>
@endsection