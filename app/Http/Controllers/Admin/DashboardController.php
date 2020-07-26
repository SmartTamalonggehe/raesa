<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\cash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $tahunIni=Carbon::now()->format('Y');
        $kas=cash::orderBy('tgl_kas')
            ->whereYear('tgl_kas',$tahunIni)
            ->get();

        return view('admin.dashboard.index',compact('kas'));
    }
}
