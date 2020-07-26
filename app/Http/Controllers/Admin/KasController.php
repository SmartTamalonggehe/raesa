<?php

namespace App\Http\Controllers\Admin;

use App\Models\cash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class KasController extends Controller
{
    public function index(Request $request)
    {
        $pemasukan=0;
        $pengeluaran=0;
        $saldo=0;

        $tahun=cash::get()->keyBy(function($d) {
            return Carbon::parse($d->tgl_kas)->format('Y');
        });

        $kas=cash::orderBy('tgl_kas')->whereMonth('tgl_kas',$request->bulan)->whereYear('tgl_kas',$request->tahun)->get();

       if ($request->all()) {
            $total = cash::orderBy('tgl_kas')->whereMonth('tgl_kas', '<' , $request->bulan)->whereYear('tgl_kas',$request->tahun)->get();

            foreach ($total as $item) {
                $pemasukan += $item->jmlh_pemasukan;
                $pengeluaran += $item->jmlh_pengeluaran;
            }

            $saldo= $pemasukan-$pengeluaran;
       }

        if ($request->ajax()) {
            $view = view('admin.kas.data', [
                'kas'=>$kas,
                'saldo_awal'=>$saldo
            ]);
            return $view;
        } 
        return view('admin.kas.index',[
            'tahun'=>$tahun,
        ]);
        
    }
}
