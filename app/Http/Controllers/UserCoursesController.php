<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserCoursesController extends Controller
{
    public function index()
    {
        if (Auth::user()->role !== 'user') {
            abort(403);
        }

        $courses = [
            ['code' => 'BSIT', 'desc' => 'BS in Information Technology', 'icon' => 'fas fa-laptop-code'],
            ['code' => 'BEED', 'desc' => 'BS in Elementary Education', 'icon' => 'fas fa-chalkboard-teacher'],
            ['code' => 'BSED', 'desc' => 'BS in Secondary Education', 'icon' => 'fas fa-book-open'],
            ['code' => 'BSHM', 'desc' => 'BS in Hospitality Management', 'icon' => 'fas fa-hotel'],
            ['code' => 'BSBA', 'desc' => 'BS in Business Administration', 'icon' => 'fas fa-briefcase'],
        ];

        $notices = [
            'Enrollment is now open!',
            'Final exams start next week.',
            'Faculty evaluation forms are available.',
        ];

    $consultations = [
    // 'Advising with Prof. Ebrahim – Sept 10',
    // 'Enrollment review – Sept 15',
    // 'Career consultation – Sept 20'
        ];
        $batchTips = [
            'Join your program’s Group Chat.',
            'Attend orientation for your batch.',
            'Check your block section schedules.',
        ];

        return view('pages.user.courses', compact('courses', 'notices', 'consultations', 'batchTips'));
    }
}
