<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    
    public function classes(){
         return $this->hasMany(Classes::class, 'location_id', 'id');
    }
}
