<?php

namespace App\Http\Controllers\Admin;

use App\Models\cash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\transaction_det;
use App\Http\Controllers\Controller;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pendapatan= cash::whereHas('transaction_det', function ($transaction_det) {
            $transaction_det->whereHas('transaction', function($transaction){
                $transaction->whereHas('item_det', function ($item_dets){
                    $item_dets->whereHas('item', function($items){
                        $items->where('nm_item','Pendapatan');
                    });
                });
            });
        })->get();

        $transaction_det = transaction_det::orderBy('nm_transaction_det')->whereHas('transaction', function($transaction){
            $transaction->whereHas('item_det', function ($item_dets){
                $item_dets->whereHas('item', function($items){
                    $items->where('nm_item','Pendapatan');
                });
            });
        })->get();

        if ($request->ajax()) {
            $view = view('admin.pendapatan.data', [
                'pendapatan'=>$pendapatan,
            ]);
            return $view;
        } 
        return view('admin.pendapatan.index',[
            'transaction_det'=>$transaction_det,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpanFoto='bukti/Tidak Ada.jpg';

        $tgl_kas=Carbon::parse($request->tgl_kas)->format('Y-m-d');
        $jmlh_pemasukan=filter_var($request->jmlh_pemasukan, FILTER_SANITIZE_NUMBER_INT);

        $data = cash::create([
            'transaction_det_id'=>$request->transaction_det_id,
            'tgl_kas'=>$tgl_kas,
            'jmlh_pemasukan'=>$jmlh_pemasukan,
            'jmlh_pengeluaran'=>0,
            'bukti'=>$simpanFoto,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return cash::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tgl_kas=Carbon::parse($request->tgl_kas)->format('Y-m-d');
        $jmlh_pemasukan=filter_var($request->jmlh_pemasukan, FILTER_SANITIZE_NUMBER_INT);

        cash::where('id',$id)
            ->update([
                'transaction_det_id'=>$request->transaction_det_id,
                'tgl_kas'=>$tgl_kas,
                'jmlh_pemasukan'=>$jmlh_pemasukan,
                'jmlh_pengeluaran'=>0,
                'bukti'=>'bukti/Tidak Ada.jpg',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cash::destroy($id);
    }
}
