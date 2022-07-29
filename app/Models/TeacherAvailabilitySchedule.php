<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAvailabilitySchedule extends Model
{
    use HasFactory;
    protected $fillable = [ 'employee_id',
                            'schedule_id',
                            'class_id'
                          ];

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
    public function class(){
        return $this->belongsTo(Classes::class, 'class_id', 'id');
    }
    public function schedule(){
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
    }
}
