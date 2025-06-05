<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
public function index($name)
{
    if (Auth::user()->role !== 'user') {
        abort(403);
    }

    return view('pages.user.profile', compact('name'));
}


}
