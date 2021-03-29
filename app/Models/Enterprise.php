<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model 
{

    protected $table = 'Enterprise';
    public $timestamps = true;

    public function Internship()
    {
        return $this->hasMany('Internship');
    }

    public function Student_Commentary()
    {
        return $this->hasOne('Student_Commentary');
    }

    public function Pilot_Commentary()
    {
        return $this->hasOne('Pilot_Commentary');
    }

}