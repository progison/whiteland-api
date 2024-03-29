<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonateCategory extends Model
{
    use HasFactory;

    public function donateLots()
    {
        return $this->belongsToMany(DonateLot::class);
    }
}
