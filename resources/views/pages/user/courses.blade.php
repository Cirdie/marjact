@extends('layouts.index')

@section('title', 'Offered Courses')

@section('custom-style')
    @parent
    <style>
        body {
            background-color: #f5f7fa;
        }

        .section-title {
            margin: 40px 0 20px;
            font-weight: bold;
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }

        .course-card {
            background: white;
            border-radius: 12px;
            padding: 25px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .course-card i {
            font-size: 2rem;
            color: #0d6efd;
            margin-bottom: 15px;
        }

        .course-card h5 {
            font-weight: 600;
            color: #343a40;
        }

        ul {
            padding-left: 20px;
        }

        .highlight-card {
    border: 2px solid #0d6efd;
    background-color: #e7f1ff;
    transform: scale(1.02);
    transition: all 0.3s ease;
}

    </style>
@endsection

@section('content')
<div class="container mt-4">

    @php
    $userCourse = strtoupper(Auth::user()->course);
@endphp

<div class="course-grid">
    @foreach ($courses as $course)
        @php
            $isUserCourse = $userCourse === strtoupper($course['code']);
        @endphp
        <div class="course-card {{ $isUserCourse ? 'highlight-card' : '' }}">
            <i class="{{ $course['icon'] }}"></i>
            <h5>{{ $course['code'] }}</h5>
            <p>{{ $course['desc'] }}</p>
            @if ($isUserCourse)
                <small class="badge bg-primary mt-2">My Course</small>
            @endif
        </div>
    @endforeach
</div>


    {{-- @For --}}
    <h4 class="section-title">Academic Notices</h4>
    <ul>
        @for ($i = 0; $i < count($notices); $i++)
            <li>{{ $notices[$i] }}</li>
        @endfor
    </ul>

    {{-- @ForElse --}}
 <h4 class="section-title">Upcoming Consultations</h4>
<ul>
    @forelse ($consultations as $consultation)
        <li>{{ $consultation }}</li>
    @empty
        <li class="text-muted"><em>You have no scheduled consultations.</em></li>
    @endforelse
</ul>


        {{-- @While --}}
    <h4 class="section-title">Batch Tips</h4>
    <ul>
        @php $index = 0; @endphp
        @while ($index < count($batchTips))
            <li>{{ $batchTips[$index] }}</li>
            @php $index++; @endphp
        @endwhile
    </ul>

</div>
@endsection
