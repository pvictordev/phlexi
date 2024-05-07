<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    protected $fillable = [
        'hourly_rate',
        'availability',
    ];
    public $timestamps = false;
    protected $primaryKey = 'freelancer_id';

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'freelancers_skills');
    }
}
