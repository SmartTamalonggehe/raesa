<?php

namespace App\Http\Controllers\Kades;

use App\Models\cash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index ()
    {
        $tahunIni=Carbon::now()->format('Y');
        $kas=cash::orderBy('tgl_kas')
            ->whereYear('tgl_kas',$tahunIni)
            ->get();

        return view('kades.dashboard.index',compact('kas'));
    }
}
