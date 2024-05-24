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

    public function user()
    {
        return $this->belongsTo(User::class, 'freelancer_id', 'id');
    }
    public function skill()
    {
        return $this->belongsToMany(Skill::class, 'freelancers_skills', 'freelancer_id', 'skill_id')->using(FreelancerSkill::class);
    }

    public function review()
    {
        return $this->belongsToMany(Review::class);
    }
}
