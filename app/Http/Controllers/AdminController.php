<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;
use App\Charts\SalesChart;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()['role'] !== 'Admin') {
            return abort(403);
        }
        $chart = new SalesChart();

        return view('admin.dashboard', compact('chart'));
    }
    public function property_management()
    {
        if (Auth::user()['role'] !== 'Admin') {
            return abort(403);
        }
        $chart = new SalesChart();
        $properties = Property::all();
        return view('admin.property_management', compact('chart', 'properties'));
    }
    public function user_management()
    {
        if (Auth::user()['role'] !== 'Admin') {
            return abort(403);
        }
        $chart = new SalesChart();
        $users = User::all();
        return view('admin.user_management', compact('chart', 'users'));
    }
    public function settings()
    {
        if (Auth::user()['role'] !== 'Admin') {
            return abort(403);
        }
        return view('admin.settings');
    }
}
