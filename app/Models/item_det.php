<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item_det extends Model
{
    protected $guarded=[];

    public function item()
    {
        return $this->belongsTo(item::class);
    }
}
