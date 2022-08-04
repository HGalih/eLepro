<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [ 'classname',
                            'startdate',
                            'enddate',
                            'description',
                            'course_id',
                            'location_id',
                            'supervisor_id',
                            'classtype_id'
                          ];
    
    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }



    public function supervisor(){
        return $this->belongsTo(Employeedetail::class, 'supervisor_id', 'id');
    }

    public function classtype(){
        return $this->belongsTo(Classtype::class, 'classtype_id', 'id');
    }

    public function teacher_availability_schedule(){
        return $this->hasMany(TeacherAvailabilitySchedule::class, 'class_id', 'id');
    }

    // public function projects(){
    //     return $this->hasMany(Project::class, 'course_id', 'id');
    // }
}
