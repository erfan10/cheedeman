<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
