@extends('layouts.index')

@section('title', 'My Profile')

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

    .profile-info label {
        font-weight: 600;
        color: #495057;
    }

    .profile-info .form-control {
        background-color: #e9ecef;
        border: none;
        margin-bottom: 20px;
    }

    .edit-btn {
        display: block;
        margin-top: 20px;
        background-color: #0d6efd;
        border: none;
        color: white;
        padding: 10px 25px;
        border-radius: 8px;
        font-weight: 600;
    }

    .edit-btn:hover {
        background-color: #084298;
    }
</style>
@endsection

@section('content')
<div class="container mt-4">
    <div class="profile-container">
        <div class="profile-header">
            <h2>My Profile</h2>
            <p class="text-muted">View your personal information</p>
        </div>

        <div class="profile-info">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" class="form-control" value="{{ Auth::user()->name }}" readonly>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">User Role</label>
                <input type="text" id="role" class="form-control" value="{{ ucfirst(Auth::user()->role) }}" readonly>
            </div>

            <a href="#" class="edit-btn">Edit Profile (Coming Soon)</a>
        </div>
    </div>
</div>
@endsection
