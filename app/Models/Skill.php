<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function freelancers()
    {
        return $this->belongsToMany(Freelancer::class, 'freelancers_skills');
    }
}
