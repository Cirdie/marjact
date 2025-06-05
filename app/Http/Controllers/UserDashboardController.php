<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index($name = null)
{
    if (Auth::user()->role !== 'user') {
        abort(403);
    }

    $authName = strtolower(Auth::user()->name);
    $paramName = strtolower($name ?? $authName);

    if ($paramName !== $authName) {
        abort(403, 'Access denied. Name mismatch.');
    }

    return view('pages.user.dashboard', ['name' => Auth::user()->name]);
}


}

