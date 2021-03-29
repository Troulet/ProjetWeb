<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{

    protected $table = 'Student';
    public $timestamps = true;

    public function Postulate()
    {
        return $this->hasMany('Postulate');
    }

    public function Student_Commentary()
    {
        return $this->hasMany('Student_Commentary');
    }

    public function Inform_Step3()
    {
        return $this->hasMany('Inform_Step3');
    }

    public function Inform_Step5()
    {
        return $this->hasMany('Inform_Step5');
    }

    public function Inform_Step6()
    {
        return $this->hasMany('Inform_Step6');
    }

    public function Users()
    {
        return $this->belongsTo('Users');
    }

}