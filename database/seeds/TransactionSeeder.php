<?php

use App\Models\transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        transaction::create([
            'id'=> 1,
            'item_det_id'=> 1,
            'nm_transaksi'=> '-'
        ]);
    }
}
