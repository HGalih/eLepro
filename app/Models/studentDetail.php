<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'nickname',
        'phone',
        'sosmed01',
        'sosmed02',
        'sosmed03',
        'gender',
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
        'status_id',
        'point',
    ];
    public function school(){
        return $this->belongsTo(School::class);
    }

    public function student_status(){
        return $this->belongsTo(StudentStatus::class, 'status_id', 'id');
    }
}
