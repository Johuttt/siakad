<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Ukt;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'ukts' => Ukt::all(),
            'ukts1' => Ukt::where('npm', auth()->user()->npm)->get()
        ]);
    }
}
