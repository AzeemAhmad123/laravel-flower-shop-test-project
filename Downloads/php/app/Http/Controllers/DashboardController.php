<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $flowers = Flower::latest()->take(10)->get();
        $totalFlowers = Flower::count();
        $totalRevenue = Flower::sum('price');
        
        return view('dashboard', compact('flowers', 'totalFlowers', 'totalRevenue'));
    }
}
