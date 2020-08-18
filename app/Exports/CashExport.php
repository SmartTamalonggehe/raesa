<?php

namespace App\Exports;

use App\Models\cash;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;


use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;



class CashExport implements FromView, WithDrawings, ShouldAutoSize, WithEvents
{
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo Sarmi');
        $drawing->setPath(public_path('asset/logo.png'));
        $drawing->setHeight(60);
        $drawing->setCoordinates('A1');

        return $drawing;
    }

    private $tahun;
    private $bulan;
    private $bulan_akhir;

    public function __construct($tahun,$bulan,$bulan_akhir)
    {
         $this->tahun = $tahun;
         $this->bulan = $bulan;
         $this->bulan_akhir = $bulan_akhir;
    }

    public function view(): View
    {
        $pemasukan=0;
        $pengeluaran=0;
        $saldo=0;

        $tahun=cash::get()->keyBy(function($d) {
            return Carbon::parse($d->tgl_kas)->format('Y');
        });

        $kas=cash::orderBy('tgl_kas')
            ->whereYear('tgl_kas',$this->tahun)
            ->get();

       if ($this->tahun and $this->bulan or $this->bulan_akhir) {
            $kas = cash::orderBy('tgl_kas')
            ->whereBetween('tgl_kas', ["$this->tahun-$this->bulan-01","$this->tahun-$this->bulan_akhir-31"])
                ->get();

            $total = cash::orderBy('tgl_kas')->whereMonth('tgl_kas', '<' , $this->bulan)->whereYear('tgl_kas',$this->tahun)->get();

            foreach ($total as $item) {
                $pemasukan += $item->jmlh_pemasukan;
                $pengeluaran += $item->jmlh_pengeluaran;
            }

            $saldo= $pemasukan-$pengeluaran;
        }

        return view('kades.export.excel.testExport',[
            'tahun'=>$tahun,
            'kas'=>$kas,
            'saldo_awal'=>$saldo
        ]);
    }

    public function registerEvents() : array
    {
        return [
            // Handle by a closure.
            AfterSheet::class    => function(AfterSheet $event) {

                // Header
                $styleArray = [
                    'borders' => [
                        'bottom' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['Hex' => '#000000'],
                        ],
                    ],
                ];
                $event->sheet->getDelegate()->getStyle('A1:H3')->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle('A1:H3')->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle('A4:H5')->getFont()->setSize(12);
                $event->sheet->getDelegate()->getStyle('A4:H5')->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle('A4:H4')->getFont()->setSize(8);
                $event->sheet->getDelegate()->mergeCells('A1:H1');
                $event->sheet->getDelegate()->mergeCells('A2:H2');
                $event->sheet->getDelegate()->mergeCells('A3:H3');
                $event->sheet->getDelegate()->mergeCells('A4:H4');
                $event->sheet->getDelegate()->mergeCells('A5:H5');
                $event->sheet->setFontFamily('A1:AC300', 'Times New Roman');
                $event->sheet->horizontalAlign('A1:H1' , Alignment::HORIZONTAL_CENTER);
                $event->sheet->horizontalAlign('A2:H2' , Alignment::HORIZONTAL_CENTER);
                $event->sheet->horizontalAlign('A3:H3' , Alignment::HORIZONTAL_CENTER);
                $event->sheet->horizontalAlign('A4:H4' , Alignment::HORIZONTAL_CENTER);
                $event->sheet->horizontalAlign('A5:H5' , Alignment::HORIZONTAL_CENTER);


                $event->sheet->getDelegate()->getStyle('A4:H4')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('B9:F9')->getFont()->setBold(true);

                $event->sheet->getColumnDimension('A')->setWidth(12);

                // Content

                $styleContent = [
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                ];


                // $kontrak=DB::table('kontrak')->where('jadwal_id',$this->id)
                //     ->join('krs','kontrak.krs_id','krs.id')
                //     ->join('perwalians','krs.perwalian_id','perwalians.id')
                //     ->join('mhs','perwalians.mhs_id','mhs.id')
                //     ->orderByDesc('NPM')
                //     ->get();

                // $akhir = $kontrak->count() + 9 ;


                // // $event->sheet->getDelegate()->getStyle('B3:B7')->getFill()
                // //     ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                // //     ->getStartColor()->setARGB('FFFF0000');

                // $event->sheet->getDelegate()->getStyle("B9:F$akhir")->applyFromArray($styleContent);

                // $event->sheet->getDefaultRowDimension("B9:F$akhir")->setRowHeight(20);

            },
        ];
    }
}
