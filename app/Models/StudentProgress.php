<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProgress extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo(User::class);
    }
    public function milestone(){
        return $this->belongsTo(ProjectMilestone::class);
    }
}
