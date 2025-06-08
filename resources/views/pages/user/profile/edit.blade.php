@extends('layouts.index')

@section('title', 'Edit Profile')

@section('custom-style')
<style>
    body {
        background-color: #f5f7fa;
    }

    .profile-container {
        max-width: 700px;
        margin: auto;
        background: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.05);
    }

    .profile-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .profile-header h2 {
        font-weight: bold;
    }

    label {
        font-weight: 600;
        color: #495057;
    }

    .form-control, .form-select {
        background-color: #e9ecef;
        border: none;
        margin-bottom: 20px;
    }

    .btn-save {
        background-color: #0d6efd;
        color: white;
        font-weight: 600;
        padding: 10px 25px;
        border-radius: 8px;
        border: none;
    }

    .btn-save:hover {
        background-color: #084298;
    }

    .alert {
        margin-bottom: 20px;
    }
</style>
@endsection

@section('content')
<div class="container mt-4">
    <div class="profile-container">
        <div class="profile-header">
            <h2>Edit Profile</h2>
            <p class="text-muted">Update your personal information</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Please fix the following errors:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('profile.update', $user->name) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Full Name</label>
                <input name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
            </div>

            <div class="mb-3">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
            </div>

            <div class="mb-3">
                <label for="course">Course</label>
                <select name="course" id="course" class="form-select" required>
                    <option disabled value="">Select your course</option>
                    <option value="BSIT" {{ old('course', $user->course) == 'BSIT' ? 'selected' : '' }}>BS in Information Technology</option>
                    <option value="BEED" {{ old('course', $user->course) == 'BEED' ? 'selected' : '' }}>BS in Elementary Education</option>
                    <option value="BSED" {{ old('course', $user->course) == 'BSED' ? 'selected' : '' }}>BS in Secondary Education</option>
                    <option value="BSHM" {{ old('course', $user->course) == 'BSHM' ? 'selected' : '' }}>BS in Hospitality Management</option>
                    <option value="BSBA" {{ old('course', $user->course) == 'BSBA' ? 'selected' : '' }}>BS in Business Administration</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn-save">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
