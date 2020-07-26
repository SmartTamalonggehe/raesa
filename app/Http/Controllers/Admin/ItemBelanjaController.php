<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\transaction;
use App\Models\transaction_det;
use Illuminate\Http\Request;

class ItemBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transaction_det=transaction_det::orderBy('nm_transaction_det')
            ->where('transaction_id','NOT LIKE',1)->get();
        
        $transaction=transaction::orderBy('nm_transaksi')
        ->where('item_det_id','NOT LIKE',1)->get();

        if ($request->ajax()) {
            $view = view('admin.itemBelanja.data', [
                'transaction_det'=>$transaction_det,
            ]);
            return $view;
        } 
        return view('admin.itemBelanja.index',[
            'transaction'=>$transaction
        ]);
        //transaction_dets transaction_id
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
        $this->validate($request,[
            'nm_transaction_det'=>'required',

        ]);

        $data = transaction_det::create([
            'transaction_id'=>$request->transaction_id,
            'nm_transaction_det'=>$request->nm_transaction_det,
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
        return transaction_det::find($id);
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
        transaction_det::where('id',$id)
            ->update([
                'transaction_id'=>$request->transaction_id,
                'nm_transaction_det'=>$request->nm_transaction_det,
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
        transaction_det::destroy($id);
    }
}
