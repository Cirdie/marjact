@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="auth-card">
    <h3 class="text-center mb-4">Create an Account</h3>

    {{-- @Switch --}}
    @switch(true)
        @case($errors->any())
            <div class="alert alert-danger">
                <strong>There were some problems with your input:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @break

        @case(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @break

        @default
            <div class="alert alert-info">Fill out the form to register.</div>
    @endswitch

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required autofocus value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Course</label>
            <select name="course" class="form-select" required>
                <option selected disabled value="">Select your course</option>
                <option value="BSIT" {{ old('course') === 'BSIT' ? 'selected' : '' }}>BS in Information Technology</option>
                <option value="BEED" {{ old('course') === 'BEED' ? 'selected' : '' }}>BS in Elementary Education</option>
                <option value="BSED" {{ old('course') === 'BSED' ? 'selected' : '' }}>BS in Secondary Education</option>
                <option value="BSHM" {{ old('course') === 'BSHM' ? 'selected' : '' }}>BS in Hospitality Management</option>
                <option value="BSBA" {{ old('course') === 'BSBA' ? 'selected' : '' }}>BS in Business Administration</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}">Already have an account?</a>
        </div>
    </form>
</div>
@endsection
