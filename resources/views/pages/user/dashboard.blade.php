@extends('layouts.index')

@section('title', 'User Dashboard')

@section('custom-style')
    @parent
    <style>
        body {
            background-color: #f5f7fa;
        }

        .dashboard-header {
            margin-bottom: 30px;
        }

        .dashboard-header h2 {
            font-weight: bold;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .card h5 {
            margin-bottom: 10px;
            color: #0d6efd;
            font-weight: 600;
        }

        .card p {
            margin: 0;
            color: #333;
        }

        .course-alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-weight: 500;
            text-align: center;
        }

        .alert-it { background-color: #e0f2fe; color: #0369a1; }
        .alert-education { background-color: #fef3c7; color: #92400e; }
        .alert-hotel { background-color: #ede9fe; color: #5b21b6; }
        .alert-business { background-color: #dcfce7; color: #166534; }
        .alert-default { background-color: #f3f4f6; color: #374151; }
    </style>
@endsection

@section('welcome')
    @parent
    <div class="dashboard-header text-center">
    </div>
@endsection


@section('content')
    <div class="dashboard-header text-center">
        <h2>Hello, {{ $name ?? Auth::user()->name }}!</h2>
        <p class="text-muted">
            You're enrolled in
            <strong>{{ strtoupper(Auth::user()->course) }}</strong>.
        </p>
    </div>

    @php
        $course = strtoupper(Auth::user()->course);
    @endphp

    @if ($course === 'BSIT')
        <div class="course-alert alert-it">
            Welcome to BSIT! Explore programming, systems design, and emerging tech here.
        </div>
    @elseif ($course === 'BEED' || $course === 'BSED')
        <div class="course-alert alert-education">
            Welcome future educator! Access your teaching resources and modules.
        </div>
    @elseif ($course === 'BSHM')
        <div class="course-alert alert-hotel">
            Welcome to Hospitality Management! Manage your training and service modules here.
        </div>
    @elseif ($course === 'BSBA')
        <div class="course-alert alert-business">
            Welcome BSBA student! Your dashboard offers business tools and case studies.
        </div>
    @else
        <div class="course-alert alert-default">
            Your course dashboard will be updated with personalized features soon.
        </div>
    @endif

    <div class="card-grid">
        <div class="card">
            <h5>My Courses</h5>
            <p>View your enrolled subjects and modules.</p>
        </div>
        <div class="card">
            <h5>Services</h5>
            <p>Access student services like document requests.</p>
        </div>
        <div class="card">
            <h5>Consultations</h5>
            <p>Schedule a consultation with faculty members.</p>
        </div>
        <div class="card">
            <h5>Profile</h5>
            <p>View and update your personal information.</p>
        </div>
    </div>
@endsection
