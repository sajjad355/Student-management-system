<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\Student;

class Batch extends Model
{
    protected $fillable=['name'];

    public function students()
    {
       return $this->hasMany(Student::class);
    }
}
