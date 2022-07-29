<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function teacher_availability_schedule(){
        return $this->hasMany(TeacherAvailabilitySchedule::class, 'schedule_id', 'id');
    }

}
