@extends('layouts.index')

@section('title', 'Consultation Booking')

@section('custom-style')
    @parent
    <style>
        body {
            background-color: #f5f7fa;
        }

        .consultation-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .consultation-header h2 {
            font-weight: bold;
        }

        .consultation-form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .consultation-form label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .consultation-form .form-control,
        .consultation-form .form-select {
            margin-bottom: 20px;
        }

        .btn-consult {
            background-color: #0d6efd;
            color: white;
            font-weight: 600;
            border-radius: 8px;
        }

        .btn-consult:hover {
            background-color: #084298;
        }
    </style>
@endsection


@section('content')
    <div class="consultation-header">
        <h2>Book a Consultation</h2>
        <p class="text-muted">Choose your department and preferred date/time to book a session</p>
    </div>

    <div class="consultation-form">
        <form method="POST" action="#">
            @csrf

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select id="department" class="form-select" required>
                    <option selected disabled>Choose department</option>
                    <option>Academic Affairs</option>
                    <option>Registrar's Office</option>
                    <option>Guidance Counselor</option>
                    <option>College Dean</option>
                    <option>Faculty / Subject Advisor</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Preferred Date</label>
                <input type="date" class="form-control" id="date" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Preferred Time</label>
                <input type="time" class="form-control" id="time" required>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Purpose / Notes (Optional)</label>
                <textarea class="form-control" id="notes" rows="3" placeholder="E.g. Course advising, enrollment issue, mental wellness check..."></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-consult">Book Consultation</button>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @parent
@endsection
