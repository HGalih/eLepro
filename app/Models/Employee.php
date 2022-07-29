<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'name',
        'gender',
        'birthdate',
        'NIK',
        'phone',
        'sosmed01',
        'sosmed02',
        'sosmed03',
        'address',
        'city',
        'province',
        'country',
        'postcode',
        'email',
        'password',
        'bankaccount',
        'education',
        'occupation',
        'skill',
        'photo',
        'note01',
        'note02',
        'note03'
    ];

    public function getAge()
    {
        $age = Carbon::parse($this->birthdate)->age;     
        return $age;
    }

    public function employee_position(){
        return $this->belongsTo(EmployeePosition::class, 'position_id', 'id');
    }

    public function classes(){
        return $this->hasMany(Classes::class, 'supervisor_id', 'id');
    }

    public function teacher_availability_schedule(){
        return $this->hasMany(TeacherAvailabilitySchedule::class, 'employee_id', 'id');
    }
}
