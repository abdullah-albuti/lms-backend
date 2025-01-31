<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   
    public function comments()
{
    return $this->hasMany(Comment::class);
}

public function registrations()
{
    return $this->hasMany(Registration::class);
}

}
