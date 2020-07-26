<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $guarded=[];

    public function item_det()
    {
        return $this->belongsTo(item_det::class);
    }
}
