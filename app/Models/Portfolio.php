<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id', 
        'student_id',
        'project_title',
        'url',
        'projectfile',
        'image',
        'description',
        'age'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id' );
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id' );
    }
}
