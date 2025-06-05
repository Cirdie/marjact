<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserRequestDocumentController extends Controller
{
    public function index()
    {
        if (Auth::user()->role !== 'user') {
            abort(403);
        }

        return view('pages.user.request-document');
    }
}
