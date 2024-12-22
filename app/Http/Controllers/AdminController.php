<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function property_management()
    {
        return view('admin.property_management');
    }
    public function user_management()
    {
        return view('admin.user_management');
    }
    public function settings()
    {
        return view('admin.settings');
    }
}
