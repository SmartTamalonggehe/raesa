<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\item_det;
use App\Models\transaction;
use Illuminate\Http\Request;

class BelanjaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transaction=transaction::orderBy('nm_transaksi')
            ->where('item_det_id','NOT LIKE',1)->get();
        
        $itemDet=item_det::orderBy('nm_item_det')->where('item_id','NOT LIKE',1)->get();

        if ($request->ajax()) {
            $view = view('admin.belanjaDetail.data', [
                'transaction'=>$transaction,
            ]);
            return $view;
        } 
        return view('admin.belanjaDetail.index',[
            'itemDet'=>$itemDet
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
        $this->validate($request,[
            'nm_transaksi'=>'required',

        ]);

        $data = transaction::create([
            'item_det_id'=>$request->item_det_id,
            'nm_transaksi'=>$request->nm_transaksi,
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
        return transaction::find($id);
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
        transaction::where('id',$id)
            ->update([
                'item_det_id'=>$request->item_det_id,
                'nm_transaksi'=>$request->nm_transaksi,
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
        transaction::destroy($id);
    }
}
