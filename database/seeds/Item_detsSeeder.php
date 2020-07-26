<?php

use App\Models\item_det;
use Illuminate\Database\Seeder;

class Item_detsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        item_det::create([
            'id'=>1,
            'item_id'=> 1,
            'nm_item_det'=> '-'
        ]);
    }
}
