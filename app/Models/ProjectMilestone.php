<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
class ProjectMilestone extends Model
{
    use HasFactory;
    protected $table = 'project_milestones';

    protected $fillable = [         
        'project_id',
        'milestone',
        'description',
        'teachmodul_url',
        'student_url',
        'video_url',
        'orderno',
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
  
}
