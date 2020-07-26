<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('transaction_det_id');
            $table->date('tgl_kas');
            $table->integer('jmlh_pemasukan');
            $table->integer('jmlh_pengeluaran');
            $table->timestamps();

            $table->foreign('transaction_det_id')->references('id')->on('transaction_dets')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashes');
    }
}
