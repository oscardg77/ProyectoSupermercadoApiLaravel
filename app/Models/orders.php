<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
     
    public function order_items()
    {
        return $this->hasMany(order_items::class);
    }
}
