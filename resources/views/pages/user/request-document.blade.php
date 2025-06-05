@extends('layouts.index')

@section('title', 'Request Document')

@section('custom-style')
<style>
    body {
        background-color: #f5f7fa;
    }

    .request-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .request-header h2 {
        font-weight: bold;
    }

    .request-form {
        background: white;
        padding: 30px;
        border-radius: 12px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .request-form label {
        font-weight: 600;
    }

    .request-form .form-control,
    .request-form .form-select {
        margin-bottom: 20px;
    }

    .btn-request {
        background-color: #0d6efd;
        color: white;
        font-weight: 600;
        border-radius: 8px;
    }

    .btn-request:hover {
        background-color: #084298;
    }
</style>
@endsection

@section('content')
<div class="container mt-4">
    <div class="request-header">
        <h2>Request a Document</h2>
        <p class="text-muted">Please fill out the form to submit your request</p>
    </div>

    <div class="request-form">
        <form method="POST" action="#">
            @csrf

            <div class="mb-3">
                <label for="document_type" class="form-label">Document Type</label>
                <select id="document_type" class="form-select" required>
                    <option selected disabled>Select document</option>
                    <option>Certificate of Enrollment</option>
                    <option>Good Moral Certificate</option>
                    <option>Transcript of Records</option>
                    <option>Certificate of Grades</option>
                    <option>Other (Specify in notes)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="purpose" class="form-label">Purpose</label>
                <input type="text" id="purpose" class="form-control" placeholder="E.g. Scholarship, Employment, Transfer..." required>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes / Special Instructions (Optional)</label>
                <textarea id="notes" class="form-control" rows="3" placeholder="Additional instructions or information..."></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-request">Submit Request</button>
            </div>
        </form>
    </div>
</div>
@endsection
