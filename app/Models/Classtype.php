<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classtype extends Model
{
    use HasFactory;

    public function classes(){
        return $this->hasMany(Classes::class, 'classtype_id', 'id');
   }
}
