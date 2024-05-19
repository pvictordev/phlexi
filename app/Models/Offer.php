<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
