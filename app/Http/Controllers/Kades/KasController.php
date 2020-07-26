<?php

namespace App\Http\Controllers\Kades;

use Exception;
use App\Models\cash;
use App\Exports\CashExport;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

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

        $kas=cash::orderBy('tgl_kas')
            ->whereYear('tgl_kas',$request->tahun)
            ->get();

       if ($request->tahun and $request->bulan) {
            $kas = cash::orderBy('tgl_kas')->whereMonth('tgl_kas', $request->bulan)->whereYear('tgl_kas',$request->tahun)->get();

            $total = cash::orderBy('tgl_kas')->whereMonth('tgl_kas', '<' , $request->bulan)->whereYear('tgl_kas',$request->tahun)->get();

            foreach ($total as $item) {
                $pemasukan += $item->jmlh_pemasukan;
                $pengeluaran += $item->jmlh_pengeluaran;
            }

            $saldo= $pemasukan-$pengeluaran;
        }

        if ($request->ajax()) {
            $view = view('kades.kas.data', [
                'kas'=>$kas,
                'saldo_awal'=>$saldo
            ]);
            return $view;
        }
        return view('kades.kas.index',[
            'tahun'=>$tahun,
        ]);
    }

    public function viewKasUmum(Request $request)
    {
        $pemasukan=0;
        $pengeluaran=0;
        $saldo=0;

        $tahun=cash::get()->keyBy(function($d) {
            return Carbon::parse($d->tgl_kas)->format('Y');
        });

        $kas=cash::orderBy('tgl_kas')
            ->whereYear('tgl_kas',$request->tahun)
            ->get();

       if ($request->tahun and $request->bulan) {
            $kas = cash::orderBy('tgl_kas')->whereMonth('tgl_kas', $request->bulan)->whereYear('tgl_kas',$request->tahun)->get();

            $total = cash::orderBy('tgl_kas')->whereMonth('tgl_kas', '<' , $request->bulan)->whereYear('tgl_kas',$request->tahun)->get();

            foreach ($total as $item) {
                $pemasukan += $item->jmlh_pemasukan;
                $pengeluaran += $item->jmlh_pengeluaran;
            }

            $saldo= $pemasukan-$pengeluaran;
        }

        return view('kades.export.excel.kasUmum',[
            'tahun'=>$tahun,
            'kas'=>$kas,
            'saldo_awal'=>$saldo
        ]);
    }

    public function viewTanggung(Request $request)
    {
        $tahun=cash::get()->keyBy(function($d) {
            return Carbon::parse($d->tgl_kas)->format('Y');
        });
        return view('kades.tanggung.index',compact('tahun'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new CashExport($request->tahun,$request->bulan), "Lap Keuangan $request->bulan $request->tahun.xlsx");
    }

    public function exportWord(Request $request)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $kop = "PEMERINTAH KABUPATEN SARMI
        DISTRIK FEE,EN
        KAMPUNG NIKA TIDI
        Alamat: Jln. Raya Sarmi - Jayapura";


        $section->addImage("asset/logo.png");


        $section->addText($kop);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save("Lap Tanggung Jawab $request->bulan $request->tahun.docx");
        return response()->download(public_path("Lap Tanggung Jawab $request->bulan $request->tahun.docx"));
    }
}
