<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Loker;
use App\Models\Pencaker;


class DashboardController extends Controller
{
    public function getLoker()
    {
        $lokerCount = Loker::count();
        return $lokerCount;
    }
    public function getPencaker()
    {
        $pencakerCount = Pencaker::count();
        return $pencakerCount;
    }

    public function index()
    {
        // Mengambil objek pengguna saat ini
        $user = Auth::user();

        // Memeriksa peran pengguna
        if ($user->role === 'petugas') {
            $lokerCount = $this->getLoker();
            $pencakerCount = $this->getPencaker();
            return view('petugas.dashboard', compact('lokerCount', 'pencakerCount'));
        } elseif ($user->role === 'pencaker') {
            return view('pencaker.dashboard');
        }
    }
}
