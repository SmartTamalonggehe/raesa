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

        $textrun = $section->addTextRun('pStyle');

        $styleImageKop=(
            array(
                'width' => 40,
                'height' => 40,
                'wrappingStyle' => 'square',
                'positioning' => 'absolute',
                'posHorizontalRel' => 'margin',
                'posVerticalRel' => 'line',
            )
        );

        $styleTextKop = 'rStyle';
        $phpWord->addFontStyle($styleTextKop, array(
            'bold'=> true,
            'size'=> 14,
            'name'=> 'Times New Roman',));

        $pKop = 'pStyle';
        $phpWord->addParagraphStyle($pKop, array(
            'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));


        $textrun->addImage('asset/logo.png',$styleImageKop);

        $textrun->addText("PEMERINTAH KABUPATEN SARMI",$styleTextKop);
        $textrun->addTextBreak(1);
        $textrun->addText("DISTRIK FEE,EN",$styleTextKop);
        $textrun->addTextBreak(1);
        $textrun->addText("KAMPUNG NIKA TIDI",$styleTextKop);
        $textrun->addTextBreak(1);
        $textrun->addText("            Alamat: Jln. Raya Sarmi - Jayapura",(array('size'=>12,'name'=> 'Times New Roman','valign' => 'center')),$pKop);

        $section->addSection(array('weight' => 1, 'width' => 100, 'height' => 0, 'color' => '00FF00'));

        $section->addTextBreak(2);
        $section->addText("LAPORAN PERTANGGUNG JAWABAN $request->bulan $request->tahun",(array('bold'=> true,'size'=>12,'name'=> 'Times New Roman','valign' => 'center')),$pKop);


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

        foreach ($kas as $item) {
            $section->addTextBreak(2);

            $section->addText($item->tgl_kas,(array('size'=>12,'name'=> 'Times New Roman')));

            $section->addText('          '.$item->transaction_det->nm_transaction_det,(array('bold'=>true,'size'=>12,'name'=> 'Times New Roman')));

            $section->addTextBreak();

            if ($item->bukti!=="bukti/Tidak Ada.jpg") {
                $section->addImage($item->bukti);
            }

            $section->addPageBreak();

        }



        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save("Lap Tanggung Jawab $request->bulan $request->tahun.docx");
        return response()->download(public_path("Lap Tanggung Jawab $request->bulan $request->tahun.docx"));
    }
}
