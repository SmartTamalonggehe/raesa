<?php

namespace App\Http\Controllers\Admin;

use App\Models\cash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\transaction_det;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pengeluaran= cash::whereHas('transaction_det', function ($transaction_det) {
            $transaction_det->whereHas('transaction', function($transaction){
                $transaction->whereHas('item_det', function ($item_dets){
                    $item_dets->whereHas('item', function($items){
                        $items->where('nm_item','Belanja');
                    });
                });
            });
        })->get();

        $transaction_det = transaction_det::orderBy('nm_transaction_det')->whereHas('transaction', function($transaction){
            $transaction->whereHas('item_det', function ($item_dets){
                $item_dets->whereHas('item', function($items){
                    $items->where('nm_item','Belanja');
                });
            });
        })->get();

        if ($request->ajax()) {
            $view = view('admin.pengeluaran.data', [
                'pengeluaran'=>$pengeluaran,
            ]);
            return $view;
        } 
        return view('admin.pengeluaran.index',[
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
        $validator = Validator::make($request->all(), [
            'bukti' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'bukti.max' => 'Ukuran bukti Tidak Boleh Lebih Dari 2 MB'
        ]);

        if ($validator->fails()) {        
            return response()->json(['errors'=>$validator->errors()]);
        }

        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $name = time().'.'.$image->extension();
            $foto=$request->bukti->move( public_path() . '/bukti/', $name);
            $simpanFoto='bukti/'.$name;
        }else {
            $simpanFoto='bukti/Tidak Ada.jpg';
        }
        
        $tgl_kas=Carbon::parse($request->tgl_kas)->format('Y-m-d');
        $jmlh_pengeluaran=filter_var($request->jmlh_pengeluaran, FILTER_SANITIZE_NUMBER_INT);

        $data = cash::create([
            'transaction_det_id'=>$request->transaction_det_id,
            'tgl_kas'=>$tgl_kas,
            'jmlh_pemasukan'=>0,
            'jmlh_pengeluaran'=>$jmlh_pengeluaran,
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
        //
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
        $jmlh_pengeluaran=filter_var($request->jmlh_pengeluaran, FILTER_SANITIZE_NUMBER_INT);

        cash::where('id',$id)
            ->update([
                'transaction_det_id'=>$request->transaction_det_id,
                'tgl_kas'=>$tgl_kas,
                'jmlh_pemasukan'=>0,
                'jmlh_pengeluaran'=>$jmlh_pengeluaran,
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
