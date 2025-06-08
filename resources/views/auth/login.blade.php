@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="auth-card">
    <h3 class="text-center mb-4">Welcome Back</h3>

    {{-- Feedback Alerts --}}
    @switch(true)
        @case(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @break

        @case(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @break

        @default
            <div class="alert alert-info">
                Please enter your credentials to log in.
            </div>
    @endswitch

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Login</button>

        <div class="text-center mt-3">
            <a href="{{ route('register') }}">Don't have an account?</a>
        </div>
    </form>
</div>
@endsection
