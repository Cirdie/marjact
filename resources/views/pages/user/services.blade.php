@extends('layouts.index')

@section('title', 'Student Services')

@section('custom-style')
    @parent
    <style>
        body {
            background-color: #f5f7fa;
        }

        .services-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 20px;
        }

        .service-card {
            background: white;
            border-radius: 12px;
            padding: 25px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .service-card i {
            font-size: 2rem;
            color: #0d6efd;
            margin-bottom: 15px;
        }

        .service-card h5 {
            font-weight: 600;
            color: #343a40;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #6c757d;
            font-size: 0.95rem;
        }

        .service-card a {
            display: inline-block;
            margin-top: 10px;
            font-weight: 600;
            color: #0d6efd;
            text-decoration: none;
        }

        .service-card a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('welcome')
    @parent
@endsection

@section('content')
    @yield('welcome')

    <div class="services-header">
        <h2>Student Services</h2>
        <p class="text-muted">Choose from available student services below</p>
    </div>

    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-file-alt"></i>
            <h5>Request a Document</h5>
            <p>Need a Certificate of Enrollment or Good Moral? Submit your request online.</p>
            <a href="/user/request-document">Go to Request</a>
        </div>

        <div class="service-card">
            <i class="fas fa-calendar-check"></i>
            <h5>Consultation Booking</h5>
            <p>Book a consultation session with faculty or administration offices.</p>
            <a href="/user/consultation">Schedule Now</a>
        </div>

        <div class="service-card">
            <i class="fas fa-question-circle"></i>
            <h5>FAQs & Helpdesk</h5>
            <p>Coming soon: common student concerns and how to resolve them.</p>
            <a href="#">Coming Soon</a>
        </div>
    </div>
@endsection
