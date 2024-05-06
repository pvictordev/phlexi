<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerSkill extends Model
{
    use HasFactory;
    protected $fillable = [
        'freelancer_id',
        'skill_id',
    ];

    protected $table = 'freelancers_skills';

    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }
}
