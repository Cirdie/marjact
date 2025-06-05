@extends('layouts.master')

@section('title', 'Authentication')

@section('custom-style')
<style>
    body {
        background: linear-gradient(to right, #74ebd5, #ACB6E5);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .auth-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
    }
</style>
@endsection

@section('body')
    @yield('content')
@endsection
