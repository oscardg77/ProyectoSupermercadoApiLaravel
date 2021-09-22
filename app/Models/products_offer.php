<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_offer extends Model
{
        
    public function offers()
    {
        return $this->hasOne(offers::class);
    }
}
