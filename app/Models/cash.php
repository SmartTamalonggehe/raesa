<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cash extends Model
{
    protected $guarded=[];

    public function transaction_det()
    {
        return $this->belongsTo(transaction_det::class);
    }
    public function getGambar()
    {
        return asset($this->bukti);
    }
}
