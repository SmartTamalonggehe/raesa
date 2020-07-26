<?php

use App\Models\item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        item::create([
            'id'=> 1,
            'nm_item'=> 'Pendapatan'
        ]);
        item::create([
            'nm_item'=> 'Belanja'
        ]);
    }
}
