<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SalesChart;

class AdminController extends Controller
{
    public function index()
    {
        $chart = new SalesChart();

        return view('admin.dashboard', compact('chart'));
    }
    public function property_management()
    {
        $chart = new SalesChart();

        return view('admin.property_management', compact('chart'));
    }
    public function user_management()
    {
        $chart = new SalesChart();

        return view('admin.user_management', compact('chart'));
    }
    public function settings()
    {
        return view('admin.settings');
    }
}
