<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function freelancer()
    {
        return $this->hasMany(Freelancer::class);
    }

    public function client()
    {
        return $this->hasMany(Client::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
