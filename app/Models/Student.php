<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'phone',
        'sosmed01',
        'sosmed02',
        'sosmed03',
        'gender',
        'email',
        'password',
        'birthdate',
        'nationality',
        'address',
        'city',
        'province',
        'country',
        'postcode',
        'photo',
        'note01',
        'note02',
        'note03',
        'school_id',
        'status_id'
    ];
    
    public function school(){
        return $this->belongsTo(School::class);
    }

    public function student_status(){
        return $this->belongsTo(StudentStatus::class, 'status_id', 'id');
    }


    // public function projects()
    // {
    //     return $this->belongsToMany(Project::class, 'portfolios', 'student_id', 'project_id')
    //     ->withTimestamps()
    //     ->withPivot(['id','project_title','url','projectfile','image','description','age','created_at','updated_at']);
    // }

    public function getAge()
    {
        $age = Carbon::parse($this->birthdate)->age;     
        return $age;
    }
}


    //protected $table = "if table name does not fit the convention";

    // private static $students = [
    //     [
    //         "slug" => "jovan",
    //         "name" => "Jovano Davian",
    //         "age" => "11",
    //         "city" => "Madiun",
    //         "pic" => "pictures/jovan.jpg" 
    //     ],
    //     [
    //         "slug" => "noah",
    //         "name" => "Noah Santoso",
    //         "age" => "9",
    //         "city" => "Surabaya",
    //         "pic" => "pictures/noah.jpg" 
    //     ]
    // ];


    // public static function all(){
    //    //  return self::$students;
    // }
