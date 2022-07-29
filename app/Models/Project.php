<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [         
        'project_title',
        'example_url',
        'application',
        'image',
        'description',
        'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id' );
    }

    // public function students()
    // {
    //     return $this->belongsToMany(Student::class, 'portfolios', 'project_id', 'student_id')
    //     ->withTimestamps()
    //     ->withPivot(['id','project_title','url','projectfile','image','description','age','created_at','updated_at']);
    // }

}
