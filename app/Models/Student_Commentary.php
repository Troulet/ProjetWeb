<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Commentary extends Model 
{

    protected $table = 'Student_Commentary';
    public $timestamps = true;

    public function Enterprise()
    {
        return $this->belongsTo('Enterprise');
    }

    public function Student()
    {
        return $this->belongsTo('Student');
    }

}