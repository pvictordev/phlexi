<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function offer()
    {
        return $this->hasOne(Offer::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
