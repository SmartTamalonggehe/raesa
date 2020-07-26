<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction_det extends Model
{
    protected $guarded=[];

    public function transaction()
    {
        return $this->belongsTo(transaction::class);
    }
}
