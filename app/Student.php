<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    public function majors(){
        return $this->hasMany(majors::class);
    }
}
