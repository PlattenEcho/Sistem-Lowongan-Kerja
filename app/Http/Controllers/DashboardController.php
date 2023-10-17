<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil objek pengguna saat ini
        $user = Auth::user();

        // Memeriksa peran pengguna
        if ($user->role === 'petugas') {
            return view('dashboard.dashboard-petugas');
        } elseif ($user->role === 'pencaker') {
            return view('dashboard.dashboard-pencaker');
        }
    }
}
