<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'start_date',
        'end_date',
        'details',
        'instructor_name',
    ];
    
     public function comments()
    {

        return $this->hasMany(Comment::class);
    }
    
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
    
}


