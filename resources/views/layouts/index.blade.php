@extends('layouts.master')

@section('title', 'Laravel Activity')


@section('body')
    @include('partials.usernavbar')

    @hasSection('welcome')
    <div class="container mt-4">
        @section('welcome')
        <p class="text-muted">You're logged in as <strong>{{ Auth::user()->role }}</strong></p>        @show
    </div>
    @endif

    <div class="container mt-2">
        @yield('content')
    </div>
@endsection
