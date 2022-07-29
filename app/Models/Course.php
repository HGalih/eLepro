<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'code',
        'course',
        'meetingnumber',
        'age_requirement',
        'level_id',
        'category_id',
        'course_prerequisite_id',
        'description',
        'application'
    ];

    
    public function course_category(){
        return $this->belongsTo(CourseCategory::class, 'category_id', 'id');
    }
    
    public function course_level(){
        return $this->belongsTo(CourseLevel::class, 'level_id', 'id');
    }

    public function following_course(){
        return $this->belongsTo(Course::class, 'course_prerequisite_id', 'id');
    }

    public function prerequisite_course(){
        return $this->hasOne(Course::class, 'course_prerequisite_id', 'id');
    }

    public function projects(){
        return $this->hasMany(Project::class, 'course_id', 'id');
    }

    public function classes(){
        return $this->hasMany(Classes::class, 'course_id', 'id');
   }




}
