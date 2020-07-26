<?php

use App\Models\transaction_det;
use Illuminate\Database\Seeder;

class Transaction_detsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        transaction_det::create([
            'transaction_id'=> 1,
            'nm_transaction_det'=> 'Dana Otsus'
        ]);
        transaction_det::create([
            'transaction_id'=> 1,
            'nm_transaction_det'=> 'Dana Pusat'
        ]);
    }
}
